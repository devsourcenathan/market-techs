<?php

class Product_tag{
    public static function create($productId, $tagId){
        Database::query(
            "INSERT INTO products_tags set productId = ?, tagId = ?",
            [$productId, $tagId]
        );  
    }

    public static function delete($productId, $tagId){
        Database::query("DELETE FROM products_tags  WHERE productId = ? AND tagId = ?", [$productId, $tagId]);  
    }

    public static function readTags($tagId){
        return Database::recover(Database::query("SELECT tags.* FROM products as p, products_tags pt, tags as t pt WHERE pt.tagId = pt.productId AND t.id = ?", [$tagId]));  
    }

    public static function readProducts($productId){
        return Database::recover(Database::query("SELECT products.* FROM products as p, products_tags pt, tags as t pt WHERE pt.tagId = pt.productId AND p.id = ?", [$productId]));  
    }


}