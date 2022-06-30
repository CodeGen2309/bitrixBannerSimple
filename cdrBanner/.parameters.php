<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>
<?CModule::IncludeModule("iblock")?>

<?
  $arComponentParameters = [
    "PARAMETERS" => [
      "HEADER" => [
        "PARENT" => "BASE",
        "NAME" => "Хедер",
        "TYPE" => "STRING",
      ],

      "HEADNOTE" => [
        "PARENT" => "BASE",
        "NAME" => "Подпись под хедером",
        "TYPE" => "STRING",
      ],

      "DESCRIPTION" => [
        "PARENT" => "BASE",
        "NAME" => "Описание",
        "TYPE" => "TEXTAREA",
      ],

      "IMAGE" => [
        "PARENT" => "BASE",
        "NAME" => "Путь к картинке",
        "TYPE" => "FILE",
        "FD_TARGET" => "F",
        "FD_EXT" => "png, gif, jpg, jpeg",
        "FD_UPLOAD" => true,
        "FD_USE_MEDIALIB" => true,
      ],

      "BUTTON_TEXT" => [
        "PARENT" => "BASE",
        "NAME" => "Текст на кнопке",
        "TYPE" => "STRING",
      ],

      "BUTTON_LINK" => [
        "PARENT" => "BASE",
        "NAME" => "Ссылка на кнопке",
        "TYPE" => "STRING",
      ],

      "COVER_COLOR" => [
        "PARENT" => "BASE",
        "NAME" => "Цвет обложки",
        "TYPE" => "STRING",
      ],

      "BORRADIUS" => [
        "PARENT" => "BASE",
        "NAME" => "Скругление углов",
        "TYPE" => "STRING",
      ],

      "HEADER_SIZE" => [
        "PARENT" => "BASE",
        "NAME" => "Размер заголовка",
        "TYPE" => "STRING",
      ],

      "HEADNOTE_SIZE" => [
        "PARENT" => "BASE",
        "NAME" => "Размер сноски",
        "TYPE" => "STRING",
      ],

      "DESCRIPTION_SIZE" => [
        "PARENT" => "BASE",
        "NAME" => "Размер описания",
        "TYPE" => "STRING",
      ],

      "BUTTON_SIZE" => [
        "PARENT" => "BASE",
        "NAME" => "Размер текста кнопки",
        "TYPE" => "STRING",
      ],

      "BLUR" => [
        "PARENT" => "BASE",
        "NAME" => "Блюр картинки",
        "TYPE" => "STRING",
      ],

      "SKEW_ANGLE" => [
        "PARENT" => "BASE",
        "NAME" => "Наклон обложки",
        "TYPE" => "STRING",
      ],

      "TRANSLATE" => [
        "PARENT" => "BASE",
        "NAME" => "Смещение обложки",
        "TYPE" => "STRING",
      ],

      "IMG_POSITION" => [
        "PARENT" => "BASE",
        "NAME" => "Положение картинки",
        "TYPE" => "STRING",
      ],

      "CONTENT_ZONE_WIDTH" => [
        "PARENT" => "BASE",
        "NAME" => "Ширина описания",
        "TYPE" => "STRING",
      ],
    ]
  ];
?>