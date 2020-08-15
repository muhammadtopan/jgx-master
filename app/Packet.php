<?php

namespace App;
use \PDF;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Packet extends Model
{
    use Sortable;
    protected $fillable = [
       'nama_pengirim','nohp_pengirim','alamat_pengirim',
       'nama_penerima','nohp_penerima','alamat_penerima', 
        'berat_pkt', 'kemasan_pkt','volume_pkt', 
        'pengiriman_pkt','status_pkt', 'resi_pkt', 'ongkir_pkt'
    ];
    public $sortable = ['nama_pengirim','created_at'];
}
