<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'last_name' => 'Medbot',
            'first_name' => 'Admin',
            'id_number' => 'admin',
            'type' => 'admin',
            'sex' => 'female',
            'birthday' => '2001-09-18',
            'municipality' => 'Boac',
            'barangay' => 'Ihatub',
            'contact_number' => '09123456789',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Jabal',
            'first_name' => 'Aubrey',
            'id_number' => '5B2-BOAPZT-2',
            'type' => 'patient',
            'sex' => 'female',
            'birthday' => '2001-09-18',
            'municipality' => 'Boac',
            'barangay' => 'Ihatub',
            'contact_number' => '09123456782',
            'email' => 'aubreyjabal12345@gmail.com',
            'password' => bcrypt('medbot2aubrey')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Uzumaki',
            'first_name' => 'Naruto',
            'id_number' => '5B2-BOAPZT-3',
            'type' => 'patient',
            'sex' => 'male',
            'birthday' => '2000-06-18',
            'municipality' => 'Boac',
            'barangay' => 'Murallon',
            'contact_number' => '09111111111',
            'email' => 'Uzumakinaruto@gmail.com',
            'password' => bcrypt('medbot3naruto')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Roronoa',
            'first_name' => 'Zoro',
            'id_number' => '5B2-MOGPZT-4',
            'type' => 'patient',
            'sex' => 'male',
            'birthday' => '1998-12-12',
            'municipality' => 'Mogpog',
            'barangay' => 'Sumangga',
            'contact_number' => '09111111112',
            'email' => 'roronoazoro@gmail.com',
            'password' => bcrypt('medbot4zoro')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Vinsmoke',
            'first_name' => 'Sanji',
            'suffix' => 'III',
            'id_number' => '5B2-STAPZT-5',
            'type' => 'patient',
            'sex' => 'male',
            'birthday' => '1998-11-29',
            'municipality' => 'Sta. Cruz',
            'barangay' => 'Lamesa',
            'contact_number' => '09091111112',
            'email' => 'sanji12@gmail.com',
            'password' => bcrypt('medbot5sanji')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Nico',
            'first_name' => 'Robin',
            'id_number' => '5B2-BUEPZT-6',
            'type' => 'patient',
            'sex' => 'female',
            'birthday' => '1997-02-14',
            'municipality' => 'Buenavista',
            'barangay' => 'Sihi',
            'contact_number' => '09090911112',
            'email' => 'nicorobin@gmail.com',
            'password' => bcrypt('medbot6robin')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Monkey',
            'first_name' => 'Luffy',
            'suffix' => 'Jr.',
            'id_number' => '5B2-MOGPZT-7',
            'type' => 'patient',
            'sex' => 'male',
            'birthday' => '2000-03-11',
            'municipality' => 'Mogpog',
            'barangay' => 'Laon',
            'contact_number' => '09090909112',
            'email' => 'monkeydluffy@gmail.com',
            'password' => bcrypt('medbot7luffy')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Nefertani',
            'first_name' => 'Vivi',
            'id_number' => '5B2-GASPZT-8',
            'type' => 'patient',
            'sex' => 'female',
            'birthday' => '2001-01-04',
            'municipality' => 'Gasan',
            'barangay' => 'Banuyo',
            'contact_number' => '09090909092',
            'email' => 'viviswan24@gmail.com',
            'password' => bcrypt('medbot8vivi')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Toni',
            'first_name' => 'Chopper',
            'suffix' => 'II',
            'honorific' => 'DR',
            'id_number' => '5B2-TORHRP-9',
            'type' => 'professional',
            'sex' => 'male',
            'birthday' => '2005-07-24',
            'municipality' => 'Torrijos',
            'barangay' => 'Bolo',
            'contact_number' => '09122222112',
            'email' => 'tonichoper@gmail.com',
            'license' => 'Toni1',
            'password' => bcrypt('medbot9chopper')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Cyborg',
            'first_name' => 'Franky',
            'id_number' => '5B2-TORHRP-10',
            'honorific' => 'DR',
            'type' => 'professional',
            'sex' => 'male',
            'birthday' => '1989-03-15',
            'municipality' => 'Torrijos',
            'barangay' => 'Bolo',
            'contact_number' => '09090933332',
            'email' => 'cybrogfranky@gmail.com',
            'license' => 'Cyborg1',
            'password' => bcrypt('medbot10franky')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Cat',
            'first_name' => 'Nami',
            'honorific' => 'RN',
            'id_number' => '5B2-MOGHRP-11',
            'type' => 'professional',
            'sex' => 'female',
            'birthday' => '1999-06-27',
            'municipality' => 'Mogpog',
            'barangay' => 'Ino',
            'contact_number' => '09555533332',
            'email' => 'catnami@gmail.com',
            'license' => 'Cat1',
            'password' => bcrypt('medbot11nami')
        ]);
        \App\Models\User::factory()->create([
            'last_name' => 'Rumbar',
            'first_name' => 'Brook',
            'honorific' => 'RN',
            'id_number' => '5B2-STAHRP-12',
            'type' => 'professional',
            'sex' => 'male',
            'birthday' => '1989-03-15',
            'municipality' => 'Sta. Cruz',
            'barangay' => 'Lamesa',
            'contact_number' => '09565633332',
            'email' => 'rumbarbrook@gmail.com',
            'license' => 'Rumbar1',
            'password' => bcrypt('medbot12brook')
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 140,
            'blood_pressure_diastolic' => 90,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 100,
            'blood_saturation_rating' => 'normal',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 85,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 75,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 100,
            'blood_saturation_rating' => 'normal',
            'temperature' => 35,
            'temperature_rating' => 'normal',
            'pulse_rate' => 95,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 110,
            'blood_pressure_diastolic' => 75,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 110,
            'pulse_rate_rating' => 'high',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 90,
            'blood_pressure_diastolic' => 55,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 80,
            'blood_saturation_rating' => 'low',
            'temperature' => 33,
            'temperature_rating' => 'low',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 75,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 950,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 115,
            'blood_pressure_diastolic' => 76,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 96,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 95,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 80,
            'blood_saturation_rating' => 'low',
            'temperature' => 33,
            'temperature_rating' => 'low',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 2,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 90,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 40,
            'temperature_rating' => 'high',
            'pulse_rate' => 60,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 110,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 90,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 65,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 37,
            'temperature_rating' => 'normal',
            'pulse_rate' => 90,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 3,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 41,
            'temperature_rating' => 'highnormal',
            'pulse_rate' => 110,
            'pulse_rate_rating' => 'high',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 70,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 86,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'low',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 89,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 4,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 76,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 35,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 40,
            'temperature_rating' => 'high',
            'pulse_rate' => 59,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 65,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
    
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 90,
            'blood_pressure_diastolic' => 50,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 5,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'low',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 40,
            'temperature_rating' => 'high',
            'pulse_rate' => 59,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 65,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 37,
            'temperature_rating' => 'normal',
            'pulse_rate' => 90,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 6,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 41,
            'temperature_rating' => 'highnormal',
            'pulse_rate' => 110,
            'pulse_rate_rating' => 'high',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 41,
            'temperature_rating' => 'highnormal',
            'pulse_rate' => 110,
            'pulse_rate_rating' => 'high',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 70,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 86,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 7,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 40,
            'temperature_rating' => 'high',
            'pulse_rate' => 59,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 40,
            'temperature_rating' => 'high',
            'pulse_rate' => 59,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'low',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 89,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 70,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 86,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 8,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 90,
            'blood_pressure_diastolic' => 50,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'low',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 9,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 80,
            'blood_saturation_rating' => 'low',
            'temperature' => 33,
            'temperature_rating' => 'low',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 90,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 40,
            'temperature_rating' => 'high',
            'pulse_rate' => 60,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 110,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 10,
            'blood_pressure_systolic' => 90,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 65,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 90,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'low',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 65,
            'pulse_rate_rating' => 'low',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 37,
            'temperature_rating' => 'normal',
            'pulse_rate' => 90,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 41,
            'temperature_rating' => 'highnormal',
            'pulse_rate' => 110,
            'pulse_rate_rating' => 'high',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 41,
            'temperature_rating' => 'highnormal',
            'pulse_rate' => 110,
            'pulse_rate_rating' => 'high',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 60,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 80,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 70,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 86,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 11,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'low',
            'temperature' => 38,
            'temperature_rating' => 'high',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 90,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 89,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 100,
            'blood_pressure_diastolic' => 70,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 86,
            'blood_saturation_rating' => 'low',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 120,
            'blood_pressure_diastolic' => 80,
            'blood_pressure_rating' => 'normal',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
        \App\Models\Reading::factory()->create([
            'user_id' => 12,
            'blood_pressure_systolic' => 130,
            'blood_pressure_diastolic' => 95,
            'blood_pressure_rating' => 'high',
            'blood_saturation' => 95,
            'blood_saturation_rating' => 'normal',
            'temperature' => 36,
            'temperature_rating' => 'normal',
            'pulse_rate' => 100,
            'pulse_rate_rating' => 'normal',
            'created_at' => '2023-08-18 17:47:50',
            'updated_at' => '2023-08-18 17:47:50'
        ]);
    }
}    
    