<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Basic package
            - 1 oficina
            - Configuración
            - Empleados
            - Control horario
            - Documentos
                Sólo listas predefinidas.
            - Sin notificaciones
                (solo email automático bienvenida trabajador)
            - 3Gb de espacio
            - Sin Soporte personalizado 24/7
        */
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'office',

            'name_ca'      => '1 Oficina',
            'name_es'      => '1 Oficina',
            'name_en'      => '1 Office',
            'name_fr'      => '1 Bureau',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 1,
            'limit_max'    => 1,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'settings',

            'name_ca'      => 'Configuració',
            'name_es'      => 'Configuración',
            'name_en'      => 'Setting',
            'name_fr'      => 'Réglage',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'employees',

            'name_ca'      => 'De 1 a 10 empleats',
            'name_es'      => 'De 1 a 10 empleados',
            'name_en'      => 'From 1 to 10 employees',
            'name_fr'      => 'De 1 à 10 employés',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 1,
            'limit_max'    => 10,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'timetable',

            'name_ca'      => 'Control horari',
            'name_es'      => 'Control horario',
            'name_en'      => 'Time control',
            'name_fr'      => 'Contrôle du temps',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'documents-lists-only-predefined',

            'name_ca'      => 'Documents <small>(només llistes predefinides)</small>',
            'name_es'      => 'Documentos <small>(sólo listas predefinidas)</small>',
            'name_en'      => 'Documents <small>(predefined lists only)</small>',
            'name_fr'      => 'Documents <small>(listes prédéfinies uniquement)</small>',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'notifications',

            'name_ca'      => 'Notificacions', // Solo bienvenida al trabajador
            'name_es'      => 'Notificaciones',
            'name_en'      => 'Notifications',
            'name_fr'      => 'Notifications',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'calendar',

            'name_ca'      => 'Calendari laboral',
            'name_es'      => 'Calendario laboral',
            'name_en'      => 'Work calendar',
            'name_fr'      => 'Calendrier de travail',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'disc-space',

            'name_ca'      => '3Gb d\'Espai',
            'name_es'      => '3Gb de Espacio',
            'name_en'      => '3Gb of Space',
            'name_fr'      => '3Gb d\'espace',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => 3000, // 3Gb
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 1,
            'code'         => 'support',

            'name_ca'      => 'Suport personalitzat 24/7',
            'name_es'      => 'Soporte personalizado 24/7',
            'name_en'      => '24/7 personalized support',
            'name_fr'      => 'Assistance personnalisée 24/7',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);

        /* Business package
            - Múltiples oficinas
            - Configuración
            - Empleados
            - Control horario
            - Documentos
                Listas predefinidas + alta nuevas listas
            - Sin notificaciones
                (solo email automático bienvenida trabajador)
            - Calendario laboral
            - 10Gb de espacio
            - Sin Soporte personalizado 24/7
        */
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'office',

            'name_ca'      => 'Múltiples Oficines',
            'name_es'      => 'Múltiples Oficinas',
            'name_en'      => 'Multiple Offices',
            'name_fr'      => 'Bureaux multiples',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'settings',

            'name_ca'      => 'Configuració',
            'name_es'      => 'Configuración',
            'name_en'      => 'Setting',
            'name_fr'      => 'Réglage',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'employees',

            'name_ca'      => 'De 11 a 20 empleats',
            'name_es'      => 'De 11 a 20 empleados',
            'name_en'      => 'From 11 to 20 employees',
            'name_fr'      => 'De 11 à 20 employés',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 11,
            'limit_max'    => 20,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'timetable',

            'name_ca'      => 'Control horari',
            'name_es'      => 'Control horario',
            'name_en'      => 'Time control',
            'name_fr'      => 'Contrôle du temps',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'documents-lists',

            'name_ca'      => 'Documents',
            'name_es'      => 'Documentos',
            'name_en'      => 'Documents',
            'name_fr'      => 'Documents',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'notifications',

            'name_ca'      => 'Notificacions', // Solo bienvenida al trabajador
            'name_es'      => 'Notificaciones',
            'name_en'      => 'Notifications',
            'name_fr'      => 'Notifications',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'calendar',

            'name_ca'      => 'Calendari laboral',
            'name_es'      => 'Calendario laboral',
            'name_en'      => 'Work calendar',
            'name_fr'      => 'Calendrier de travail',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'disc-space',

            'name_ca'      => '10Gb d\'Espai',
            'name_es'      => '10Gb de Espacio',
            'name_en'      => '10Gb of Space',
            'name_fr'      => '10Gb d\'espace',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => 10000, // 10Gb
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 2,
            'code'         => 'support',

            'name_ca'      => 'Suport personalitzat 24/7',
            'name_es'      => 'Soporte personalizado 24/7',
            'name_en'      => '24/7 personalized support',
            'name_fr'      => 'Assistance personnalisée 24/7',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);

        /* Excellence package
            - Múltiples oficinas
            - Configuración
            - Empleados
            - Control horario
            - Documentos
                Listas predefinidas + alta nuevas listas.
            - Todas las Notificaciones automáticas
            - Calendario laboral
            - Espacio ilimitado
            - Sin Soporte personalizado 24/7
        */
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'office',

            'name_ca'      => 'Múltiples Oficines',
            'name_es'      => 'Múltiples Oficinas',
            'name_en'      => 'Multiple Offices',
            'name_fr'      => 'Bureaux multiples',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'settings',

            'name_ca'      => 'Configuració',
            'name_es'      => 'Configuración',
            'name_en'      => 'Setting',
            'name_fr'      => 'Réglage',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'employees',

            'name_ca'      => 'De 21 a 40 empleats',
            'name_es'      => 'De 21 a 40 empleados',
            'name_en'      => 'From 21 to 40 employees',
            'name_fr'      => 'De 21 à 40 employés',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 21,
            'limit_max'    => 40,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'timetable',

            'name_ca'      => 'Control horari',
            'name_es'      => 'Control horario',
            'name_en'      => 'Time control',
            'name_fr'      => 'Contrôle du temps',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'documents-lists',

            'name_ca'      => 'Documents',
            'name_es'      => 'Documentos',
            'name_en'      => 'Documents',
            'name_fr'      => 'Documents',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'notifications',

            'name_ca'      => 'Notificacions', // Solo bienvenida al trabajador
            'name_es'      => 'Notificaciones',
            'name_en'      => 'Notifications',
            'name_fr'      => 'Notifications',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'calendar',

            'name_ca'      => 'Calendari laboral',
            'name_es'      => 'Calendario laboral',
            'name_en'      => 'Work calendar',
            'name_fr'      => 'Calendrier de travail',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'disc-space',

            'name_ca'      => 'Emmagatzematge il·limitat',
            'name_es'      => 'Almacenamiento ilimitado',
            'name_en'      => 'Unlimited storage',
            'name_fr'      => 'Stockage illimité',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => 50000, // 50Gb
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 3,
            'code'         => 'support',

            'name_ca'      => 'Suport personalitzat 24/7',
            'name_es'      => 'Soporte personalizado 24/7',
            'name_en'      => '24/7 personalized support',
            'name_fr'      => 'Assistance personnalisée 24/7',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);

        /* Premium package
            - Múltiples oficinas
            - Configuración
            - Empleados
            - Control horario
            - Documentos
                Listas predefinidas + alta nuevas listas.
            - Todas las Notificaciones automáticas
            - Calendario laboral
            - Espacio ilimitado
            - Soporte personalizado 24/7
        */
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'office',

            'name_ca'      => 'Múltiples Oficines',
            'name_es'      => 'Múltiples Oficinas',
            'name_en'      => 'Multiple Offices',
            'name_fr'      => 'Bureaux multiples',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'settings',

            'name_ca'      => 'Configuració',
            'name_es'      => 'Configuración',
            'name_en'      => 'Setting',
            'name_fr'      => 'Réglage',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'employees',

            'name_ca'      => 'De 41 a 100 empleats',
            'name_es'      => 'De 41 a 100 empleados',
            'name_en'      => 'From 41 to 100 employees',
            'name_fr'      => 'De 41 à 100 employés',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 41,
            'limit_max'    => 100,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'timetable',

            'name_ca'      => 'Control horari',
            'name_es'      => 'Control horario',
            'name_en'      => 'Time control',
            'name_fr'      => 'Contrôle du temps',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'documents-lists',

            'name_ca'      => 'Documents',
            'name_es'      => 'Documentos',
            'name_en'      => 'Documents',
            'name_fr'      => 'Documents',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'notifications',

            'name_ca'      => 'Notificacions', // Solo bienvenida al trabajador
            'name_es'      => 'Notificaciones',
            'name_en'      => 'Notifications',
            'name_fr'      => 'Notifications',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'calendar',

            'name_ca'      => 'Calendari laboral',
            'name_es'      => 'Calendario laboral',
            'name_en'      => 'Work calendar',
            'name_fr'      => 'Calendrier de travail',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'disc-space',

            'name_ca'      => 'Emmagatzematge il·limitat',
            'name_es'      => 'Almacenamiento ilimitado',
            'name_en'      => 'Unlimited storage',
            'name_fr'      => 'Stockage illimité',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => 50000, // 50Gb
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 4,
            'code'         => 'support',

            'name_ca'      => 'Suport personalitzat 24/7',
            'name_es'      => 'Soporte personalizado 24/7',
            'name_en'      => '24/7 personalized support',
            'name_fr'      => 'Assistance personnalisée 24/7',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);

        /* Demo package
            - 1 oficina
            - Configuración
            - Empleados
            - Control horario
            - Documentos
                Sólo listas predefinidas.
            - Sin notificaciones
                (solo email automático bienvenida trabajador)
            - 3Gb de espacio
            - Sin Soporte personalizado 24/7
        */
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'office',

            'name_ca'      => '1 Oficina',
            'name_es'      => '1 Oficina',
            'name_en'      => '1 Office',
            'name_fr'      => '1 Bureau',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 1,
            'limit_max'    => 1,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'settings',

            'name_ca'      => 'Configuració',
            'name_es'      => 'Configuración',
            'name_en'      => 'Setting',
            'name_fr'      => 'Réglage',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'employees',

            'name_ca'      => 'De 1 a 10 empleats',
            'name_es'      => 'De 1 a 10 empleados',
            'name_en'      => 'From 1 to 10 employees',
            'name_fr'      => 'De 1 à 10 employés',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => 1,
            'limit_max'    => 10,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'timetable',

            'name_ca'      => 'Control horari',
            'name_es'      => 'Control horario',
            'name_en'      => 'Time control',
            'name_fr'      => 'Contrôle du temps',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'documents-lists-only-predefined',

            'name_ca'      => 'Documents <small>(només llistes predefinides)</small>',
            'name_es'      => 'Documentos <small>(sólo listas predefinidas)</small>',
            'name_en'      => 'Documents <small>(predefined lists only)</small>',
            'name_fr'      => 'Documents <small>(listes prédéfinies uniquement)</small>',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'notifications',

            'name_ca'      => 'Notificacions', // Solo bienvenida al trabajador
            'name_es'      => 'Notificaciones',
            'name_en'      => 'Notifications',
            'name_fr'      => 'Notifications',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'calendar',

            'name_ca'      => 'Calendari laboral',
            'name_es'      => 'Calendario laboral',
            'name_en'      => 'Work calendar',
            'name_fr'      => 'Calendrier de travail',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'disc-space',

            'name_ca'      => '3Gb d\'Espai',
            'name_es'      => '3Gb de Espacio',
            'name_en'      => '3Gb of Space',
            'name_fr'      => '3Gb d\'espace',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'Y',
            'limit_min'    => null,
            'limit_max'    => 3000, // 3Gb
        ]);
        DB::table('package_options')->insert([
            'package_id'   => 5,
            'code'         => 'support',

            'name_ca'      => 'Suport personalitzat 24/7',
            'name_es'      => 'Soporte personalizado 24/7',
            'name_en'      => '24/7 personalized support',
            'name_fr'      => 'Assistance personnalisée 24/7',

            // 'functionality_ca' => '',
            // 'functionality_es' => '',
            // 'functionality_en' => '',
            // 'functionality_fr' => '',

            'active'       => 'N',
            'limit_min'    => null,
            'limit_max'    => null,
        ]);
    }
}
