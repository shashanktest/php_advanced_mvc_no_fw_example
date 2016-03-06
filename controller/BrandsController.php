<?php
/**
 * Created by PhpStorm.
 * User: Cosmin
 * Date: 2/21/2016
 * Time: 3:28 PM
 */
class BrandsController
{
    public function getBrands() {
        $brandModel = new Brands();
        $result = $brandModel->getBrands();

        /*foreach ($result as $value) {
            echo '
        <div class="servicesitem">
			<div class="front">
				<div data-icon="&#xe082;" class="icon"></div>
				<p>'.$value['site'].'</p>
			</div>
			<div class="back">
				<h3>'.$value['nume'].'</h3>
			</div>
		</div>
            ';
        }*/

        return $result;


    }
}