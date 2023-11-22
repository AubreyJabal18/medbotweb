
    const termsCheckbox = document.getElementById('terms');
    const termsPopup = document.getElementById('termsPopup');
    const privacyPopup = document.getElementById('privacyPopup');
    const closeButtonTerms = document.getElementById('closeButtonTerms');
    const closeButtonPrivacy = document.getElementById('closeButtonPrivacy');
    const termsContent = document.getElementById('termsContent');
    const privacyContent = document.getElementById('privacyContent');

    termsCheckbox.addEventListener('change', function () {
        if (termsCheckbox.checked) {
            openTermsPopup();
        } else {
            closeTermsPopup();
        }
    });

    function openTermsPopup() {
        termsPopup.classList.remove('hidden');
        termsContent.style.display = 'block';
        privacyContent.style.display = 'none';
    }

    function closeTermsPopup() {
        termsPopup.classList.add('hidden');
    }

    termsPopup.addEventListener('click', function (event) {
        if (event.target === termsPopup) {
            closeTermsPopup();
        }
    });

    closeButtonTerms.addEventListener('click', function () {
        closeTermsPopup();
    });

    privacyPopup.addEventListener('click', function (event) {
        if (event.target === privacyPopup) {
            openPrivacyPopup();
        }
    });

    function openPrivacyPopup() {
        privacyPopup.classList.remove('hidden');
        privacyContent.style.display = 'block';
        termsContent.style.display = 'none';
    }

    function closePrivacyPopup() {
        privacyPopup.classList.add('hidden');
    }

    closeButtonPrivacy.addEventListener('click', function () {
        closePrivacyPopup();
    });

