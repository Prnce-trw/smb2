<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'product_id';

    public function getBrand()
    {
        return $this->belongsTo(brand::class, 'product_brand_id');
    }

    public function getProductSizes()
    {
        return $this->hasMany(size::class, 'size_fkey', 'product_id');
    }

    public function getProductSizes_frontend()
    {
        return $this->hasMany(size::class, 'size_fkey', 'product_id');
    }

    public function getProductPcds()
    {
        return $this->hasMany(pcd::class, 'pcd_fkey', 'product_id');
    }

    public function getProductEts()
    {
        return $this->hasMany(et::class, 'et_fkey', 'product_id');
    }

    public function getProductImgSets()
    {
        return $this->hasMany(productimgset::class, 'product_imgset_product_id', 'product_id');
    }

    public function getProductImgGallerys()
    {
        return $this->hasMany(productgallery::class, 'product_gallery_product_id', 'product_id');
    }

    public function getProductCars()
    {
        return $this->hasMany(productcar::class, 'pc_product_id', 'product_id');
    }

    public function getProductShow()
    {
        if ($this->product_show_status == 1) {
            return '<span style="color: #2ed8b6;"><i class="fa fa-2x fa-check"></i></span>';
        } else {
            return '<span style="color: #FF5370;"><i class="fa fa-2x fa-times"></i></span>'; 
        }
    }

    public function getAward_img()
    {
        return $this->belongsTo(award_img::class, 'product_id');
    }

    public function getAward()
    {
        return $this->belongsTo(award::class, 'award_product');
    }

    public function getColors()
    {
        return $this->hasOne(color::class, 'color_product_id', 'product_id');
    }

    public function getAwardProduct()
    {
        return $this->belongsTo(award_probrand::class, 'product_id');
    }
}