<?php


class BasicInspection
{

    public function getCost() {

        return 25;
    }
}

class BasicInspectionAndOilChange
{

    public function getCost() {

        return 25 + 19;
    }
}

class BasicInspectionAndOilChangeAndTireRotation
{

    public function getCost() {

        return 25 + 19 + 20;
    }
}

echo (new BasicInspectionAndOilChangeAndTireRotation())->getCost();