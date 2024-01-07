<link rel="stylesheet" href="asset/css/Tryneon/designdemo.css">
<div class=" designdemo" >
    <div class="show_demo" id="khungdemo">
        <div id="nd1" class="content_design" draggable="true" onmousedown="move_demo('nd1')" ontouchstart="move_demo('nd1')">Neon và Bảng hiệu</div>
        <div id="nd2" class="content_design" draggable="true" onmousedown="move_demo('nd2')" ontouchstart="move_demo('nd2')">.</div>
        <div id="nd3" class="content_design" draggable="true" onmousedown="move_demo('nd3')" ontouchstart="move_demo('nd3')">LEDVN</div>
        <div id="showSizeText">
            <div class="right">
                <span class="firt border"></span>
                <div class="value">15</div>
                <span class="second border"></span>
            </div>
            <div class="bottom">
                <span class="firt border"></span>
                <div class="value">15</div>
                <span class="second border"></span>
            </div>
        </div>
    </div>
    <div class="action_demo">
        <div class="action_demo_menu">
            
            <div class="action_demo_menu_child">
            <h1>Nội dung</h1>
                <input type="text" placeholder="Dòng 1" id="nd1_content" value="Quảng cáo LEDVN" oninput="update_content('nd1_content','nd1');">
                <input type="text" placeholder="Dòng 2" id="nd2_content" value="" oninput="update_content('nd2_content','nd2');">
                <input type="text" placeholder="Dòng 3" id="nd3_content" value="Neon và Bảng hiệu" oninput="update_content('nd3_content','nd3');">
            </div>
            
            <div class="action_demo_menu_child">
                <h1>Kích thước</h1>
                <input type="range" min="20" max="50" id="FontSize" oninput="updateFontSize()">
            </div>
            
            <div class="action_demo_menu_child fontdemo">  
            <h1>Font chữ</h1>       
                <button id="Show_more_BTN" onclick="update_faIcon_btn('.font_More');">
                    <div id="fontName_BTN">Demo Font</div>
                    <i class="fa fa-angle-down"></i>
                </button>
                <div class="show_more_selection font_More">
                    <?php
                        $tam = 0;
                        $directory = 'asset/font';
                        $fileList = scandir($directory);
                        foreach ($fileList as $file) {
                            if (is_file($directory . '/' . $file)) {
                                $tam++;
                                $fontname = str_replace(".otf", "", $file);
                                echo "<button id = $fontname onclick =updatefont('$fontname');>FONT $tam</button>";
                            }
                        }
                    ?>
                </div>
            </div>
            <h1>Màu sắc</h1>
            <div class="action_demo_menu_child btn_Select_Color">
                
                <button id="WarmWhite_color" onclick="updateColor('WarmWhite_color');" style="background: #fff97c;"></button>
                <button id="Orange_color"    onclick="updateColor('Orange_color');"  style="background: #ff8d02;"></button>
                <button id="Blueice_color"   onclick="updateColor('Blueice_color');" style="background: #90dcff;"></button>
                <button id="Pink_color"      onclick="updateColor('Pink_color');"    style="background: #ff90ff;"></button>
                <button id="White_color"     onclick="updateColor('White_color');"   style="background: #e1e3e6;"></button>
            </div>
        </div>
    </div>
    <div class="action_demo_mb">
        
        <div class="nav_action_mb">
            <button id="select_content_action" onclick="direct_main_action_mb('.mb.content_box', 'select_content_action' )">Nội dung</button>
            <button id="select_color_action"   onclick="direct_main_action_mb('.mb.color_box', 'select_color_action')">Màu sắc</button>
            <button id="select_size_action"   onclick="direct_main_action_mb('.mb.size_box', 'select_size_action')">Kích thước</button>
            <button id="select_font_action"   onclick="direct_main_action_mb('.mb.font_box', 'select_font_action')">Font chữ</button>
        </div>
        <div class="glider"></div>
        <div class="main_action_mb">
            <div class="action_demo_menu_child mb content_box">
                <input type="text" placeholder="Dòng 1" id="nd1_content_mb" value="Quảng cáoo" oninput="update_content('nd1_content_mb','nd1');">
                <input type="text" placeholder="Dòng 2" id="nd2_content_mb" value="&" oninput="update_content('nd2_content_mb','nd2');">
                <input type="text" placeholder="Dòng 3" id="nd3_content_mb" value="LEDVN" oninput="update_content('nd3_content_mb','nd3');">
            </div>
            
            <div class="action_demo_menu_child mb btn_Select_Color color_box">
                <button id="WarmWhite_color" onclick="updateColor('WarmWhite_color');" style="background: #fff97c;"></button>
                <button id="Orange_color"    onclick="updateColor('Orange_color');"  style="background: #ff8d02;"></button>
                <button id="Blueice_color"   onclick="updateColor('Blueice_color');" style="background: #90dcff;"></button>
                <button id="Pink_color"      onclick="updateColor('Pink_color');"    style="background: #ff90ff;"></button>
                <button id="White_color"     onclick="updateColor('White_color');"   style="background: #e1e3e6;"></button>
            </div>
            <div class="action_demo_menu_child mb size_box">
                <input type="range" min="15" max="30" id="FontSize_mb" oninput="updateFontSize()">
            </div>
            <div class="action_demo_menu_child mb  font_box">
                    <?php
                        $tam = 0;
                        $directory = 'asset/font';
                        $fileList = scandir($directory);
                        foreach ($fileList as $file) {
                            if (is_file($directory . '/' . $file)) {
                                $tam++;
                                $id_font = str_replace(".otf", "", $file);
                                $fontname = str_replace(".otf", "", $file) . '_mb';
                                echo "<button id = $fontname onclick =updatefont('$id_font');>FONT $tam</button>";
                            }
                        }
                    ?>
            </div>
        </div>
    </div>


</div>

<script src="asset/js/designdemo.js"></script>