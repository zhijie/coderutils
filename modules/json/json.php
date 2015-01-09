
<script type="text/javascript" src="<?php echo base_url("assets/js/json/c.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/json/s.css"); ?>" type="text/css">

<div class="container">
    <h1>Json tools</h1>

    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="tabbable" id="tabs-110046">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#panel-format" data-toggle="tab">Format</a>
                    </li>
                    <li>
                        <a href="#panel-convert" data-toggle="tab">convert</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="panel-format">
                        <div class="HeadersRow">

                            <h3 id="HeaderSubTitle">JSON格式化及高亮:</h3>
                            <textarea id="RawJson" class="resizable ">
                            </textarea>
                        </div>
                        <div id="ControlsRow">
                            <input type="Button" value="格式化" onclick="Process()"/>
                            <span id="TabSizeHolder"> 缩进量
                                <select id="TabSize" onchange="TabSizeChanged()">
                                    <option value="1">1</option>
                                    <option value="2" selected="true">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select> </span>
                            <label for="QuoteKeys">
                                <input type="checkbox" id="QuoteKeys" onclick="QuoteKeysClicked()" checked="true" />
                                引号 </label>&nbsp; <a href="javascript:void(0);" onclick="SelectAllClicked()">全选</a>
                            &nbsp;
                            <span id="CollapsibleViewHolder" > <label for="CollapsibleView">
                                    <input type="checkbox" id="CollapsibleView" onclick="CollapsibleViewClicked()" checked="true" />
                                    显示控制 </label> </span>
                            <span id="CollapsibleViewDetail"> <a href="javascript:void(0);" onclick="ExpandAllClicked()">展开</a> <a href="javascript:void(0);" onclick="CollapseAllClicked()">叠起</a> <a href="javascript:void(0);" onclick="CollapseLevel(3)">2级</a> <a href="javascript:void(0);" onclick="CollapseLevel(4)">3级</a> <a href="javascript:void(0);" onclick="CollapseLevel(5)">4级</a> <a href="javascript:void(0);" onclick="CollapseLevel(6)">5级</a> <a href="javascript:void(0);" onclick="CollapseLevel(7)">6级</a> <a href="javascript:void(0);" onclick="CollapseLevel(8)">7级</a> <a href="javascript:void(0);" onclick="CollapseLevel(9)">8级</a> </span>
                        </div>
                        <div id="Canvas" class="Canvas"></div>
                    </div>
                    <div class="tab-pane" id="panel-convert">
                        <p>
                            Howdy, I'm in Section 2.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
