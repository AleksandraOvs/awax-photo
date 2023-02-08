<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Добавление фотографии')
    ->show_on_post_type('site_photos')
    ->add_fields( array(
        Field::make('text', 'photo_autor', 'Автор фото')
        ->set_width(50),
        // Field::make('color', 'card_color', 'Выбрать цвет карточки')
        // ->set_width(50),
        //Выбор цвета для карточки собаки
        Field::make('text', 'photo_title', 'Название фото')
        ->set_width(50),
        Field::make('text', 'photo_description', 'Описание фото')
        ->set_width(50)
            ));
