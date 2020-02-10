<?php

return [
    'roles' =>
    [
        'SUPER_ADMIN'     => ['id' => 1, 'name' => 'super_admin', 'display_name' => 'Super Administrador', 'guard_name' => 'web'],
        'ADMIN'           => ['id' => 2, 'name' => 'admin',       'display_name' => 'Administrador',       'guard_name' => 'web'],
        'STUDENT'         => ['id' => 3, 'name' => 'student',     'display_name' => 'Aluno',               'guard_name' => 'web'],
    ],
];