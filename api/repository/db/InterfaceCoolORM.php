<?php

namespace repository\db;

interface InterfaceCoolORM
{
    public function check(array $where, array $join, string $error);

    public function get(array $where, $column, array $join);

    public function getList(array $where, $column, array $join);

    public function add(array $where);

    public function update(array $set, array $where);

    public function delete(array $set, bool $real_remove);
}