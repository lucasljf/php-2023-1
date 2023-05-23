<?php

interface IDao
{
    public function inserir($objeto);
    public function listar_tudo();
    public function buscar_id(int $id);
}
