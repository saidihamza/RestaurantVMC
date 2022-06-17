<?php


class DetailController
{
    public function httpGetMethod($queryFields)
    {

      $id = $queryFields['mealId'];
        $mealModel = new MealModel();
        $meal = $mealModel->listOne($id);
  
        return ['meal' =>$meal];

        
  
    }
}
