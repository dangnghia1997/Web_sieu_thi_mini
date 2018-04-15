<?php 
require_once("database.php");
class M_san_pham extends database{
	public function Hien_thi_san_pham($vt=-1, $limit=-1){
		$sql = "SELECT * FROM products ";
		if($vt > -1 && $limit > -1){
			$sql.= "limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRow();
	}

	public function Hien_thi_san_pham_theo_ma_san_pham($ma_san_pham, $vt=-1, $limit=-1){
		$sql = "SELECT * FROM products where ProductID = ? ";
		if($vt > -1 && $limit > -1){
			$sql.= "limit $vt, $limit";
		}
		$this->setQuery($sql);
		$param = array($ma_san_pham);

		return $this->loadAllRow($param);
	}

	public function Hien_thi_san_pham_theo_loai_san_pham($ma_loai, $vt=-1, $limit=-1){
		$sql = "SELECT * FROM products where CategoryID = ? ";
		if($vt > -1 && $limit > -1){
			$sql.= "limit $vt, $limit";
		}
		$this->setQuery($sql);
		$param = array($ma_loai);

		return $this->loadAllRow($param);
	}

	public function Hien_thi_san_pham_dang_giam_gia($vt=-1, $limit=-1){
		$sql = "SELECT * FROM products where Price is not null ORDER BY Discount DESC ";
		if($vt > -1 && $limit > -1){
			$sql.= "limit $vt, $limit";
		}
		$this->setQuery($sql);

		return $this->loadAllRow();
	}
}

// $m = new M_san_pham();
// $arr = $m->Hien_thi_san_pham_dang_giam_gia(0, 9);
// echo "<pre>";
// print_r($arr);
// echo "<pre>";
 ?>