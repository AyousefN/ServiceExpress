<?php
	/**
	 * Created by PhpStorm.
	 * User: dark-
	 * Date: 9/16/2017
	 * Time: 3:17 PM
	 */
	//namespace Novent\Transfroers;
	namespace Novent\Transformers;
	class SectionServicesTrans extends Transfomer
	{

		public function transform ($user)
		{

			return [
				'id' => $user['id'],
				'section_id' => $user['section_id'],
				'name_en' => $user['name_en'],
				'name_ar' => $user['name_ar'],
				'desc_en' => $user['desc_en'],
				'desc_ar' => $user['desc_ar'],
				'status' => (boolean)$user['status'],
				'created_at' =>  date('Y-m-d', strtotime($user['created_at'])) ,

			];

		}

	}