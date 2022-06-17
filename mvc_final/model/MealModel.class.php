<?php

class MealModel
{

    public function listMeal()
    {

        $database = new Database('mysql:host=localhost;dbname=resto;charset=UTF8', 'root', '');
        $sql = 'SELECT * FROM meal';

        // Récupération de tous les produits alimentaires.
        $meals = $database->query($sql);
        return $meals;
    }


    public function listOne($id)
    {

        $database = new Database('mysql:host=localhost;dbname=resto;charset=UTF8', 'root', '');
        $sql = 'SELECT * FROM meal WHERE Id = ?';

        // Récupération de tous les produits alimentaires.
        $meal = $database->queryOne($sql,[$id]);
        return $meal;
    }
}
