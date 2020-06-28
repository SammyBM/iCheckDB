<?php

class user {
	public $username;
	public $password;
}


class userFull{
	public $username;
	public $password;
	public $email;
	public $name;
}

class category {
	public $id_category;
	public $name_category;
}


class product {
	public $id_product;
	public $id_category;
	public $description;
}

class favourite {
	public $id_favourite;
	public $username;
	public $id_product;
	public $date_favourite;
}

class Store {
	public $id_store;
	public $name_store;
}

class cupboard{
	public $id_cupboard;
	public $username;
	public $id_product;
	public $quantity;
}

class selection {
	public $id_selection;
	public $username;
	public $list_name;
	public $feautured;
}

class products_on_list {
	public $id_products_on_list;
	public $id_selection;
	public $id_product;
	public $quantity;
}

class purchase {
	public $id_purchase;
	public $username;
	public $id_store;
	public $id_product;
	public $date_purchase;
	public $total;
}

class perishable_product {
	public $id_perishable;
	public $username;
	public $days_of_life;
	public $id_product;
}

class GetProducts_on_cupboard{
	public $description;
	public $quantity;
}

class GetPuchases{
	public $name_store;
	public $Date_purchase;
	public $Total;
}


 ?>
