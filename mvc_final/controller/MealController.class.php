<?php


class MealController
{
    public function httpGetMethod()
    {
      
        $mealModel = new MealModel();
        $meal = $mealModel->listMeal();
  
        return ['meals' =>$meal,'name'=>'ali'];

        
  
    }
}
