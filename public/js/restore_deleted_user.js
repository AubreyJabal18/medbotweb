
const confirmRestoreOverlay = document.getElementById('confirm-restore-overlay');
const noticeRestorePatientModal = document.getElementById('notice-restore-patient');
const cancel = document.getElementById('cancel-button');
const restoreButton = document.getElementById('restore-button');
const restoreForm = document.getElementById('restore-form');
const restoreIdField = document.getElementById('restore-id');
const restoreField = document.querySelectorAll('.restore');
var activeCardId = -1;

//FOR USERS LIST TABLE//

const restore_tableField = document.getElementById('restore-table');

async function getRestoreDeletedUser(){
    const response = await fetch('/get/restore_deleted_users_list')
    const data = await response.json();
    return data['users-list'];
    }

getRestoreDeletedUser().then((data) => {
        console.log(data);
        new gridjs.Grid({
            columns: ['Id', 'Code', 'Type', 'Sex', 'Birthdate', 'Address', 
                {
                    name: 'Action',
                    formatter: (cell, row) => {
                        return gridjs.h('button',{
                            className: 'py-1 mb-4 px-2 border rounded-full rounded-md text-white bg-restore',
                            onClick: () => {
                                openNoticeRestorePatientModal();
                                activeCardId = row.cells[0].data;
                            },
                        }, 'Restore'   
                    );
                }
                }    
            ],
            search: {
                selector: (cell, rowIndex, cellIndex) => {
                    if (cellIndex === 1) return cell;
                }
            },
            autoWidth: true,
            data: data,
            pagination: {
                limit: 10,
                summary: false
            },
            sort: true,
            className:{
                th: 'text-roboto text-black'
            }
    
        }).render(restore_tableField);
    }
)

//FOR DELETING USER IN USERS LIST//

function closeNoticeRestorePatientModal(){
    if (!confirmRestoreOverlay.classList.contains('hidden')){
        confirmRestoreOverlay.classList.add('hidden');
        noticeRestorePatientModal.classList.add('hidden');
    }
}

function openNoticeRestorePatientModal(){
    if (confirmRestoreOverlay.classList.contains('hidden')){
        confirmRestoreOverlay.classList.remove('hidden');
        noticeRestorePatientModal.classList.remove('hidden');
    }
}

confirmRestoreOverlay.addEventListener('click', closeNoticeRestorePatientModal);
cancel.addEventListener('click', closeNoticeRestorePatientModal);
window.addEventListener('keydown', function(event){
    if(event.key == 'Escape'){
        closeNoticeRestorePatientModal();
    }
});

restoreButton.addEventListener('click', function(){
    restoreIdField.value = activeCardId;      
    restoreForm.submit();
});