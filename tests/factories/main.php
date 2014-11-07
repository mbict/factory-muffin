<?php

use League\FactoryMuffin\Faker\Facade as Faker;

$fm->define('IdTestModelGetKeyStub', []);
$fm->define('IdTestModelPkStub', []);
$fm->define('IdTestModelIdStub', []);
$fm->define('IdTestModelNullStub', []);

$fm->define('IdTestModelStub', [
    'modelGetKey' => 'factory|IdTestModelGetKeyStub',
    'modelPk'     => 'factory|IdTestModelPkStub',
    'model_id'    => 'factory|IdTestModelIdStub',
    'model_null'  => 'factory|IdTestModelNullStub',
]);

$fm->define('FakerDefaultingModelStub', [
    'title'         => Faker::word(),
    'email'         => Faker::email(),
    'content'       => Faker::text(),
    'card'          => Faker::creditCardDetails(),
    'image'         => Faker::imageUrl(400, 600),
    'unique_text'   => Faker::unique()->text(),
    'optional_text' => Faker::optional()->text(),
]);

$fm->define('MainModelStub', [
    'modelb_id'    => 'factory|FakerDefaultingModelStub',
    'name'         => Faker::word(),
    'email'        => Faker::email(),
    'message'      => Faker::text(),
    'number'       => Faker::randomNumber(9),
    'created'      => Faker::date('Y-m-d'),
    'full_name'    => Faker::name(),
    'string_4'     => Faker::word(4),
    'text_4'       => Faker::text(5),
    'text_100'     => Faker::text(),
    'text'         => Faker::text(),
    'text_actual'  => 'sneakyString',
    'boolean'      => Faker::boolean(),
    'lat'          => Faker::latitude(),
    'lon'          => Faker::longitude(),
    'text_closure' => function () {
        return 'just a string';
    },
]);

$fm->define('ComplexModelStub', [
    'future'       => 'ComplexModelStub::fortyDaysFromNow',
]);

$fm->define('ModelWithStaticMethodFactory', [
    'string' => 'just a string',
    'data'   => function ($object, $saved) {
        return compact('object', 'saved');
    },
]);
