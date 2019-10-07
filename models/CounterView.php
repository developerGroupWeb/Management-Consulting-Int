<?php


class CounterView extends Announces
{
    private $file = 'data/counter.txt';

    function add_view($ip_addr, $article_id){

        $date = time();
        $row = $this->builderGet('users', ['ip','=', $ip_addr, 'AND', 'article_id', '=', $article_id])
                    ->count();

        if($row === 0){
            $this->insert('users', ['ip' => $ip_addr, 'article_id' => $article_id, 'temps' => $date]);
        }

    }

    /**
     * @param $article_id
     * @return string
     */
    function number_views($article_id):string {

        switch ($this->counter($article_id)){
            case 0:
                return '0 vue';
                break;
            case 1:
                return '1 vue';
                break;
            default:
                return $this->counter($article_id).' vues';
                break;
        }
    }

    /**
     * @param $article_id
     * @return mixed
     */
    function counter($article_id){
        return $this->get('users', ['article_id','=', $article_id])
                    ->count();
    }
}