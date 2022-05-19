

include("Listing12-11.php");
$page_title = "Address Book";

// По умолчанию загружается страница с фамилиями,
// начинающимися с буквы 'а'
if(! isset($letter) ) :
  $letter = "а";
endif ;

$tpl = new template;
$tpl->register_file("book", "book.html");
$tpl->register_variables("book", "page_title.letter");
$tpl ->address_sql("book", "rows.addresses", "$letter");
$tpl ->file_parser("book");
$tpl->phnt_fil("book");

