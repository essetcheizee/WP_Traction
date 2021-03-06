<?php

class Links_Nav_Walker extends Walker_Nav_Menu{
    public function start_lvl( &$output, $depth = 0, $args = [] ){
        $output         .=  '<ul>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ){
        $output         .=  '<li>';
        $output         .=  $args->before;
        $output         .=  '<a href="' . $item->url . '" class="arrow-link">
                                <div class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="142.9"
                                            height="44.948" viewBox="0 0 142.9 44.948">
                                            <g id="Group_112" data-name="Group 112"
                                                transform="translate(-1194 -71)">
                                                <path id="Path_198" data-name="Path 198"
                                                    d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                                    transform="translate(1194.001 15.923)" fill="#fff" />
                                                <line id="Line_1" data-name="Line 1" x2="95"
                                                    transform="translate(1239.5 93.5)" fill="none" stroke="#fff"
                                                    stroke-linecap="round" stroke-width="4.8" />
                                            </g>
                                        </svg></div>';
        $output         .=  $args->link_before . $item->title . $args->link_after;
        $output         .=  '</a>';
        $output         .=  $args->after;
    }

    public function end_el( &$output, $item, $depth = 0, $args = [], $id = 0 ){
        $output         .=  '</li>';
    }

    public function end_lvl( &$output, $depth = 0, $args = [] ){
        $output         .=  '</ul>';
    }
}