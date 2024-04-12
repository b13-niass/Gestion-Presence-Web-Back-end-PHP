<?php

    function findAllPresence($promotion){
        
        $presences = [
            [
            [
                'matricule' => 'P6_DEVDAT_2024_129',
                'nom' => 'FAYE',
                'prenom' => 'Ibrahima',
                'tel' => '772839922',
                'referentiel' => 3,
                'heure_arrivee' => '07:00',
                'etat' => 1,
                'date' => '01-01-2024'
            ],
            [
                'matricule' => 'P6_DEVWEB_2024_129',
                'nom' => 'Ndiaye',
                'prenom' => 'Fatou',
                'tel' => '772833322',
                'referentiel' => 3,
                'heure_arrivee' => '09:00',
                'etat' => 2,
                'date' => '01-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDIG_2024_129',
                'nom' => 'Mbow',
                'prenom' => 'Saer',
                'tel' => '772839922',
                'referentiel' => 1,
                'heure_arrivee' => '06:00',
                'etat' => 3,
                'date' => '01-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_130',
                'nom' => 'Diallo',
                'prenom' => 'Aïcha',
                'tel' => '771234567',
                'referentiel' => 2,
                'heure_arrivee' => '08:30',
                'etat' => 1,
                'date' => '02-01-2024'
            ],
            [
                'matricule' => 'P6_DEVWEB_2024_130',
                'nom' => 'Diop',
                'prenom' => 'Mamadou',
                'tel' => '773456789',
                'referentiel' => 2,
                'heure_arrivee' => '09:15',
                'etat' => 2,
                'date' => '02-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDIG_2024_130',
                'nom' => 'Sylla',
                'prenom' => 'Fatoumata',
                'tel' => '774567890',
                'referentiel' => 1,
                'heure_arrivee' => '08:00',
                'etat' => 3,
                'date' => '02-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 4,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 4,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 4,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_131',
                'nom' => 'Thiam',
                'prenom' => 'Moussa',
                'tel' => '775678901',
                'referentiel' => 1,
                'heure_arrivee' => '07:45',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVWEB_2024_131',
                'nom' => 'Diagne',
                'prenom' => 'Mariama',
                'tel' => '776789012',
                'referentiel' => 3,
                'heure_arrivee' => '10:00',
                'etat' => 2,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDIG_2024_131',
                'nom' => 'Sow',
                'prenom' => 'Omar',
                'tel' => '777890123',
                'referentiel' => 2,
                'heure_arrivee' => '07:30',
                'etat' => 3,
                'date' => '03-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_135',
                'nom' => 'Cissé',
                'prenom' => 'Aminata',
                'tel' => '778901234',
                'referentiel' => 3,
                'heure_arrivee' => '08:00',
                'etat' => 1,
                'date' => getTodayDate()
            ],
            [
                'matricule' => 'P6_DEVWEB_2024_135',
                'nom' => 'Drame',
                'prenom' => 'Ousmane',
                'tel' => '779012345',
                'referentiel' => 2,
                'heure_arrivee' => '09:30',
                'etat' => 2,
                'date' => '05-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDIG_2024_135',
                'nom' => 'Fall',
                'prenom' => 'Mouhamed',
                'tel' => '770123456',
                'referentiel' => 2,
                'heure_arrivee' => '06:45',
                'etat' => 3,
                'date' => '05-01-2024'
            ],
            [
                'matricule' => 'P6_DEVDAT_2024_136',
                'nom' => 'Camara',
                'prenom' => 'Aissatou',
                'tel' => '771234567',
                'referentiel' => 1,
                'heure_arrivee' => '07:15',
                'etat' => 1,
                'date' => '06-01-2024'
            ],
            [
                'matricule' => 'P6_DEVWEB_2024_136',
                'nom' => 'Diallo',
                'prenom' => 'Mamadou',
                'tel' => '772345678',
                'referentiel' => 3,
                'heure_arrivee' => '09:15',
                'etat' => 2,
                'date' => '06-01-2024'
            ],
            'idPromotion' => 6
            ],
            [
                [
                    'matricule' => 'P5_DEVDAT_2024_129',
                    'nom' => 'FAYE',
                    'prenom' => 'Ibrahima',
                    'tel' => '772839922',
                    'referentiel' => 3,
                    'heure_arrivee' => '07:00',
                    'etat' => 1,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVWEB_2024_129',
                    'nom' => 'Ndiaye',
                    'prenom' => 'Fatou',
                    'tel' => '772833322',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:00',
                    'etat' => 2,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDIG_2024_129',
                    'nom' => 'Mbow',
                    'prenom' => 'Saer',
                    'tel' => '772839922',
                    'referentiel' => 1,
                    'heure_arrivee' => '06:00',
                    'etat' => 3,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_130',
                    'nom' => 'Diallo',
                    'prenom' => 'Aïcha',
                    'tel' => '771234567',
                    'referentiel' => 2,
                    'heure_arrivee' => '08:30',
                    'etat' => 1,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVWEB_2024_130',
                    'nom' => 'Diop',
                    'prenom' => 'Mamadou',
                    'tel' => '773456789',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDIG_2024_130',
                    'nom' => 'Sylla',
                    'prenom' => 'Fatoumata',
                    'tel' => '774567890',
                    'referentiel' => 1,
                    'heure_arrivee' => '08:00',
                    'etat' => 3,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVWEB_2024_131',
                    'nom' => 'Diagne',
                    'prenom' => 'Mariama',
                    'tel' => '776789012',
                    'referentiel' => 3,
                    'heure_arrivee' => '10:00',
                    'etat' => 2,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDIG_2024_131',
                    'nom' => 'Sow',
                    'prenom' => 'Omar',
                    'tel' => '777890123',
                    'referentiel' => 2,
                    'heure_arrivee' => '07:30',
                    'etat' => 3,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_135',
                    'nom' => 'Cissé',
                    'prenom' => 'Aminata',
                    'tel' => '778901234',
                    'referentiel' => 3,
                    'heure_arrivee' => '08:00',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P5_DEVWEB_2024_135',
                    'nom' => 'Drame',
                    'prenom' => 'Ousmane',
                    'tel' => '779012345',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:30',
                    'etat' => 2,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDIG_2024_135',
                    'nom' => 'Fall',
                    'prenom' => 'Mouhamed',
                    'tel' => '770123456',
                    'referentiel' => 2,
                    'heure_arrivee' => '06:45',
                    'etat' => 3,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVDAT_2024_136',
                    'nom' => 'Camara',
                    'prenom' => 'Aissatou',
                    'tel' => '771234567',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:15',
                    'etat' => 1,
                    'date' => '06-01-2024'
                ],
                [
                    'matricule' => 'P5_DEVWEB_2024_136',
                    'nom' => 'Diallo',
                    'prenom' => 'Mamadou',
                    'tel' => '772345678',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '06-01-2024'
                ],
                'idPromotion' => 5
            ],
            [
                [
                    'matricule' => 'P4_DEVDAT_2024_129',
                    'nom' => 'FAYE',
                    'prenom' => 'Ibrahima',
                    'tel' => '772839922',
                    'referentiel' => 3,
                    'heure_arrivee' => '07:00',
                    'etat' => 1,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVWEB_2024_129',
                    'nom' => 'Ndiaye',
                    'prenom' => 'Fatou',
                    'tel' => '772833322',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:00',
                    'etat' => 2,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDIG_2024_129',
                    'nom' => 'Mbow',
                    'prenom' => 'Saer',
                    'tel' => '772839922',
                    'referentiel' => 1,
                    'heure_arrivee' => '06:00',
                    'etat' => 3,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_130',
                    'nom' => 'Diallo',
                    'prenom' => 'Aïcha',
                    'tel' => '771234567',
                    'referentiel' => 2,
                    'heure_arrivee' => '08:30',
                    'etat' => 1,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVWEB_2024_130',
                    'nom' => 'Diop',
                    'prenom' => 'Mamadou',
                    'tel' => '773456789',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDIG_2024_130',
                    'nom' => 'Sylla',
                    'prenom' => 'Fatoumata',
                    'tel' => '774567890',
                    'referentiel' => 1,
                    'heure_arrivee' => '08:00',
                    'etat' => 3,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVWEB_2024_131',
                    'nom' => 'Diagne',
                    'prenom' => 'Mariama',
                    'tel' => '776789012',
                    'referentiel' => 3,
                    'heure_arrivee' => '10:00',
                    'etat' => 2,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDIG_2024_131',
                    'nom' => 'Sow',
                    'prenom' => 'Omar',
                    'tel' => '777890123',
                    'referentiel' => 2,
                    'heure_arrivee' => '07:30',
                    'etat' => 3,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_135',
                    'nom' => 'Cissé',
                    'prenom' => 'Aminata',
                    'tel' => '778901234',
                    'referentiel' => 3,
                    'heure_arrivee' => '08:00',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P4_DEVWEB_2024_135',
                    'nom' => 'Drame',
                    'prenom' => 'Ousmane',
                    'tel' => '779012345',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:30',
                    'etat' => 2,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDIG_2024_135',
                    'nom' => 'Fall',
                    'prenom' => 'Mouhamed',
                    'tel' => '770123456',
                    'referentiel' => 2,
                    'heure_arrivee' => '06:45',
                    'etat' => 3,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVDAT_2024_136',
                    'nom' => 'Camara',
                    'prenom' => 'Aissatou',
                    'tel' => '771234567',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:15',
                    'etat' => 1,
                    'date' => '06-01-2024'
                ],
                [
                    'matricule' => 'P4_DEVWEB_2024_136',
                    'nom' => 'Diallo',
                    'prenom' => 'Mamadou',
                    'tel' => '772345678',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '06-01-2024'
                ],
                'idPromotion' => 4
            ],
            [
                [
                    'matricule' => 'P3_DEVDAT_2024_129',
                    'nom' => 'FAYE',
                    'prenom' => 'Ibrahima',
                    'tel' => '772839922',
                    'referentiel' => 3,
                    'heure_arrivee' => '07:00',
                    'etat' => 1,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVWEB_2024_129',
                    'nom' => 'Ndiaye',
                    'prenom' => 'Fatou',
                    'tel' => '772833322',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:00',
                    'etat' => 2,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDIG_2024_129',
                    'nom' => 'Mbow',
                    'prenom' => 'Saer',
                    'tel' => '772839922',
                    'referentiel' => 1,
                    'heure_arrivee' => '06:00',
                    'etat' => 3,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_130',
                    'nom' => 'Diallo',
                    'prenom' => 'Aïcha',
                    'tel' => '771234567',
                    'referentiel' => 2,
                    'heure_arrivee' => '08:30',
                    'etat' => 1,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVWEB_2024_130',
                    'nom' => 'Diop',
                    'prenom' => 'Mamadou',
                    'tel' => '773456789',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDIG_2024_130',
                    'nom' => 'Sylla',
                    'prenom' => 'Fatoumata',
                    'tel' => '774567890',
                    'referentiel' => 1,
                    'heure_arrivee' => '08:00',
                    'etat' => 3,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVWEB_2024_131',
                    'nom' => 'Diagne',
                    'prenom' => 'Mariama',
                    'tel' => '776789012',
                    'referentiel' => 3,
                    'heure_arrivee' => '10:00',
                    'etat' => 2,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDIG_2024_131',
                    'nom' => 'Sow',
                    'prenom' => 'Omar',
                    'tel' => '777890123',
                    'referentiel' => 2,
                    'heure_arrivee' => '07:30',
                    'etat' => 3,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_135',
                    'nom' => 'Cissé',
                    'prenom' => 'Aminata',
                    'tel' => '778901234',
                    'referentiel' => 3,
                    'heure_arrivee' => '08:00',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P3_DEVWEB_2024_135',
                    'nom' => 'Drame',
                    'prenom' => 'Ousmane',
                    'tel' => '779012345',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:30',
                    'etat' => 2,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDIG_2024_135',
                    'nom' => 'Fall',
                    'prenom' => 'Mouhamed',
                    'tel' => '770123456',
                    'referentiel' => 2,
                    'heure_arrivee' => '06:45',
                    'etat' => 3,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVDAT_2024_136',
                    'nom' => 'Camara',
                    'prenom' => 'Aissatou',
                    'tel' => '771234567',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:15',
                    'etat' => 1,
                    'date' => '06-01-2024'
                ],
                [
                    'matricule' => 'P3_DEVWEB_2024_136',
                    'nom' => 'Diallo',
                    'prenom' => 'Mamadou',
                    'tel' => '772345678',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '06-01-2024'
                ],
                'idPromotion' => 3
            ],
            [
                [
                    'matricule' => 'P2_DEVDAT_2024_129',
                    'nom' => 'FAYE',
                    'prenom' => 'Ibrahima',
                    'tel' => '772839922',
                    'referentiel' => 3,
                    'heure_arrivee' => '07:00',
                    'etat' => 1,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVWEB_2024_129',
                    'nom' => 'Ndiaye',
                    'prenom' => 'Fatou',
                    'tel' => '772833322',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:00',
                    'etat' => 2,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDIG_2024_129',
                    'nom' => 'Mbow',
                    'prenom' => 'Saer',
                    'tel' => '772839922',
                    'referentiel' => 1,
                    'heure_arrivee' => '06:00',
                    'etat' => 3,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_130',
                    'nom' => 'Diallo',
                    'prenom' => 'Aïcha',
                    'tel' => '771234567',
                    'referentiel' => 2,
                    'heure_arrivee' => '08:30',
                    'etat' => 1,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVWEB_2024_130',
                    'nom' => 'Diop',
                    'prenom' => 'Mamadou',
                    'tel' => '773456789',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDIG_2024_130',
                    'nom' => 'Sylla',
                    'prenom' => 'Fatoumata',
                    'tel' => '774567890',
                    'referentiel' => 1,
                    'heure_arrivee' => '08:00',
                    'etat' => 3,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVWEB_2024_131',
                    'nom' => 'Diagne',
                    'prenom' => 'Mariama',
                    'tel' => '776789012',
                    'referentiel' => 3,
                    'heure_arrivee' => '10:00',
                    'etat' => 2,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDIG_2024_131',
                    'nom' => 'Sow',
                    'prenom' => 'Omar',
                    'tel' => '777890123',
                    'referentiel' => 2,
                    'heure_arrivee' => '07:30',
                    'etat' => 3,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_135',
                    'nom' => 'Cissé',
                    'prenom' => 'Aminata',
                    'tel' => '778901234',
                    'referentiel' => 3,
                    'heure_arrivee' => '08:00',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P2_DEVWEB_2024_135',
                    'nom' => 'Drame',
                    'prenom' => 'Ousmane',
                    'tel' => '779012345',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:30',
                    'etat' => 2,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDIG_2024_135',
                    'nom' => 'Fall',
                    'prenom' => 'Mouhamed',
                    'tel' => '770123456',
                    'referentiel' => 2,
                    'heure_arrivee' => '06:45',
                    'etat' => 3,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVDAT_2024_136',
                    'nom' => 'Camara',
                    'prenom' => 'Aissatou',
                    'tel' => '771234567',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:15',
                    'etat' => 1,
                    'date' => '06-01-2024'
                ],
                [
                    'matricule' => 'P2_DEVWEB_2024_136',
                    'nom' => 'Diallo',
                    'prenom' => 'Mamadou',
                    'tel' => '772345678',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '06-01-2024'
                ],
                'idPromotion' => 2
            ],
            [
                [
                    'matricule' => 'P1_DEVDAT_2024_129',
                    'nom' => 'FAYE',
                    'prenom' => 'Ibrahima',
                    'tel' => '772839922',
                    'referentiel' => 3,
                    'heure_arrivee' => '07:00',
                    'etat' => 1,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVWEB_2024_129',
                    'nom' => 'Ndiaye',
                    'prenom' => 'Fatou',
                    'tel' => '772833322',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:00',
                    'etat' => 2,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDIG_2024_129',
                    'nom' => 'Mbow',
                    'prenom' => 'Saer',
                    'tel' => '772839922',
                    'referentiel' => 1,
                    'heure_arrivee' => '06:00',
                    'etat' => 3,
                    'date' => '01-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_130',
                    'nom' => 'Diallo',
                    'prenom' => 'Aïcha',
                    'tel' => '771234567',
                    'referentiel' => 2,
                    'heure_arrivee' => '08:30',
                    'etat' => 1,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVWEB_2024_130',
                    'nom' => 'Diop',
                    'prenom' => 'Mamadou',
                    'tel' => '773456789',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDIG_2024_130',
                    'nom' => 'Sylla',
                    'prenom' => 'Fatoumata',
                    'tel' => '774567890',
                    'referentiel' => 1,
                    'heure_arrivee' => '08:00',
                    'etat' => 3,
                    'date' => '02-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_131',
                    'nom' => 'Thiam',
                    'prenom' => 'Moussa',
                    'tel' => '775678901',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:45',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVWEB_2024_131',
                    'nom' => 'Diagne',
                    'prenom' => 'Mariama',
                    'tel' => '776789012',
                    'referentiel' => 3,
                    'heure_arrivee' => '10:00',
                    'etat' => 2,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDIG_2024_131',
                    'nom' => 'Sow',
                    'prenom' => 'Omar',
                    'tel' => '777890123',
                    'referentiel' => 2,
                    'heure_arrivee' => '07:30',
                    'etat' => 3,
                    'date' => '03-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_135',
                    'nom' => 'Cissé',
                    'prenom' => 'Aminata',
                    'tel' => '778901234',
                    'referentiel' => 3,
                    'heure_arrivee' => '08:00',
                    'etat' => 1,
                    'date' => getTodayDate()
                ],
                [
                    'matricule' => 'P1_DEVWEB_2024_135',
                    'nom' => 'Drame',
                    'prenom' => 'Ousmane',
                    'tel' => '779012345',
                    'referentiel' => 2,
                    'heure_arrivee' => '09:30',
                    'etat' => 2,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDIG_2024_135',
                    'nom' => 'Fall',
                    'prenom' => 'Mouhamed',
                    'tel' => '770123456',
                    'referentiel' => 2,
                    'heure_arrivee' => '06:45',
                    'etat' => 3,
                    'date' => '05-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVDAT_2024_136',
                    'nom' => 'Camara',
                    'prenom' => 'Aissatou',
                    'tel' => '771234567',
                    'referentiel' => 1,
                    'heure_arrivee' => '07:15',
                    'etat' => 1,
                    'date' => '06-01-2024'
                ],
                [
                    'matricule' => 'P1_DEVWEB_2024_136',
                    'nom' => 'Diallo',
                    'prenom' => 'Mamadou',
                    'tel' => '772345678',
                    'referentiel' => 3,
                    'heure_arrivee' => '09:15',
                    'etat' => 2,
                    'date' => '06-01-2024'
                ],
                'idPromotion' => 1
            ],
        ];

        foreach($presences as $presence_list){
            if($presence_list['idPromotion'] == $promotion){
               return array_slice($presence_list, 0, -1);
            }
        }
        return [];
    }

    function getReferentielName($numero){
        if($numero === 1){
        return "Dev Web/mobile";
        }
        else if($numero === 2){
        return "Referentiel Digital";
        }
        else if($numero === 3){
        return "Developpement Data";
        }
        else if($numero === 4){
        return "Aws";
        } 
        else if($numero === 5){
        return "Hackeuse";
        }
    }

    function findAllPresenceFilter($filtre = null, $promotion){
        $presenceFilter = findAllPresence($promotion);
        // dd($filtre);
        if($filtre != null){
            
            if(isset($filtre['status'])){
                $presenceFilter = array_filter($presenceFilter, function($value) use($filtre){
                    return $value['etat'] === (integer) $filtre['status']; 
                });
                $presenceFilter = array_values($presenceFilter);
            }

            if(isset($filtre['referentiels'])){
                $presenceFilter = array_filter($presenceFilter, function($value) use($filtre){
                    return $value['referentiel'] === (integer) $filtre['referentiels']; 
                });
                $presenceFilter = array_values($presenceFilter);   
                
  
           }
        //    dd($filtre);
            if(isset($filtre['date'])){
                 $formattedDate = date('d-m-Y', strtotime($filtre['date']));

                $presenceFilter = array_filter($presenceFilter, function($value) use($formattedDate){
                    $formattedDate2 = date('d-m-Y', strtotime($value['date']));
                    return $formattedDate === $formattedDate2; 
                });
                $presenceFilter = array_values($presenceFilter);
                // dd($presenceFilter);

            }

        }
        
        $presenceFilter = array_values($presenceFilter);

        //  dd($presenceFilter);

        return $presenceFilter;
        
    }

    function findAllPresenceSearch($search = null, $presences){
        $presenceFilter = [];
        // dd($search === '09-04-2024');
        if($search != null){
                $presenceFilter = array_filter($presences, function($value) use($search){
                    return $value['matricule'] === $search || $value['nom'] === $search 
                    || $value['prenom'] === $search || $value['tel'] === $search 
                    || getReferentielName($value['referentiel']) === $search 
                    || $value['date'] === $search  ; 
                });
                $presenceFilter = array_values($presenceFilter);
    
        }
        // dd($presenceFilter);
        $presenceFilter = array_values($presenceFilter);
        return $presenceFilter;
        
    }
    
?>