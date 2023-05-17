<?php

interface IDao
{
    public function inserir(Object $objeto);
    public function listar_tudo();
    public function buscar_id(int $id);
}
