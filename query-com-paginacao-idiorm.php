<?php

	public static function traz_posts_com_paginacao($page, $posts_per_page = 4, $slug = false){

		if(!$categoria_slug){			
			$total = ORM::for_table('tabela')->count();
		}else{			
			$total = ORM::for_table('tabela')->where_equal('slug', $slug)->count();
		}

		$limit = $posts_per_page;
		$pages = ceil($total / $limit);
		$offset = ($page - 1)  * $limit;

	  	// Some information to display to the user
		$start = $offset + 1;
		$end = min(($offset + $limit), $total);

		$base_url = (!$categoria_slug) ? '/pagina' : '/pagina'.$categoria_slug; 

		if($total>0){

			//if($plataforma == "default"){

				$lista_paginacao = "<ul class='lista-paginacao'>";

			    $lista_paginacao .= ($page > 1) ? '<li><a href="'.$base_url.'?page=' . ($page - 1) . '" title="Página anterior">Anterior</a></li>' : '';

			    $i = ($page>1) ? $page-1 : $page;
			    $i = (($i+3)>$pages) ? $page-2 : $i;
			    $i = ($page==$pages) ? $page-3 : $i;

			    $range = $i+3;

			    for($i; $i<=$range; $i++){

			    	if($i>0){
			    		$zero = ($i<10) ? "0" : "";
			    		$lista_paginacao .= ($i==$page) ? '<li class="current"><span>'.$zero.$i.'</span></li>' : '<li><a href="'.$base_url.'?page=' . $i . '" title="Página '.$i.'">'.$zero.$i.'</a></li>';

			    	}

			    }


			    $lista_paginacao .= ($page < $pages) ? '<li><a href="'.$base_url.'?page=' . ($page + 1) . '" title="Próxima página">Próximo</a></li>' : '';
			    $lista_paginacao .= "</ul>";
				

		    $result['paginacao'] = $lista_paginacao;
		}else{
			$result['paginacao'] = "";
		}


	    if(!$categoria_slug){

	    	$result['posts'] = ORM::for_table('tabela')
			->select_many('*')
			->offset($offset)
			->limit($limit)
			->findArray();
	    }else{
	    	
			$result['posts'] = ORM::for_table('tabela')
			->select_many('*')
			->offset($offset)
			->limit($limit)
			->where('slug', $slug)
			->findArray();	    	
	    }
		
		return $result;

	}