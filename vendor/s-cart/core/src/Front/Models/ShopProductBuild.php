<?php
#S-Cart/Core/Front/Models/ShopProductBuild.php
namespace SCart\Core\Front\Models;

use Illuminate\Database\Eloquent\Model;
use SCart\Core\Front\Models\ShopProduct;

class ShopProductBuild extends Model
{
    use \SCart\Core\Front\Models\ModelTrait;
    
    protected $primaryKey = ['build_id', 'product_id'];
    public $incrementing  = false;
    protected $guarded    = [];
    public $timestamps    = false;
    public $table = SC_DB_PREFIX.'shop_product_build';
    protected $connection = SC_CONNECTION;
    public function product()
    {
        return $this->belongsTo(ShopProduct::class, 'product_id', 'id');
    }
}
