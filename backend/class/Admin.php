<?php

class Admin
{
    private int $admin_id;
    private string $admin_name;


    public function __construct(
        int $id_admin,
        string $name_admin,

    ) {
        $this->admin_id = $id_admin;
        $this->admin_name = $name_admin;
    }
    //getters
    public function getAdminId(): int
    {
        return $this->admin_id;
    }
    public function getAdminName(): string
    {
        return $this->admin_name;
    }
}
