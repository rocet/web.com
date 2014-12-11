@section('footer')
<p>Rocet 2014</p>
<style>
form>label{
    clear: left;
    display: block;
    margin: 10px 0;
    }
aside .panel.panel-default {
    position: fixed;
    left: -80px;
    top: 10%;
    z-index: 99999;
}
aside .panel.panel-default ul.list-group {
    height: 0;
    overflow: hidden;
}
aside .panel.panel-default ul.list-group.current {
    height: auto;
}
aside .panel.panel-default:hover {
    left: 0px;
}
p{
    word-wrap: break-word;
}
.form-inline select.form-control {
    margin-right: 10px;
}
.overflow-x-auto {
    overflow-y: hidden;
}
.form-inline label.selectMultiple {
    display: inline;
    clear: left;
    margin: 0 10px;
}
.form-inline select[multiple].form-control{
    min-width: 20%;
    height: 260px;
    /*overflow-y: hidden;*/
    margin: 0;
}
.form-inline option {
    /*color: brown;*/
    padding: 8px;
    margin: 2px;
    /*border: 1px solid rgb(18, 2, 2);*/
    /*background: goldenrod;*/
}
.form-inline option:hover {
    /*color: #ffffff;*/
    /*background: #1273ff;*/
}

/*.ruleCheckBoxPanel label.form-inline {*/
    /*display: inline-block;*/
    /*width: 30%;*/
    /*height: 30px;*/
/*}*/

::-webkit-scrollbar {
width:6px;
height: 6px;
/*height:14px;*/
/*background:-webkit-gradient(linear,left top,right top,color-stop(0%,rgba(202,202,202,0.07)),color-stop(100%,rgba(229,229,229,0.07)));*/
/*background:-webkit-linear-gradient(left,rgba(202,202,202,0.07) 0%,rgba(229,229,229,0.07) 100%);*/
/*background-color:rgba(229,229,229,.3);*/
/*-webkit-box-shadow:0 0 1px 0 rgba(0,0,0,.15) inset,0 1px 0 0 #fff;*/
/*box-shadow:0 0 1px  0 rgba(0,0,0,.15) inset,0 1px 0 0 #fff;*/
overflow:visible;
border-radius:2px;
/*border:solid 1px #A6A6A6;*/
}
::-webkit-scrollbar-button {
width:0;
height:0; display:block;
background-color:transparent;
}
::-webkit-scrollbar-thumb {
background:-webkit-gradient(linear,left top,right top,color-stop(0%,rgba(233,233,233,0.05)),color-stop(100%,rgba(221,221,221,0.05)));
background:-webkit-linear-gradient(left,rgba(233,233,233,0.05) 0%,rgba(221,221,221,0.05) 100%);
-webkit-box-shadow:0 2px 1px 0 rgba(0,0,0,.05),inset 1px 1px 0 0 #FFF;
box-shadow:0 2px 1px 0 rgba(0,0,0,.05),inset 1px 1px 0 0 #FFF;
background-color:rgba(229,229,229,.9);
overflow:visible;
border-radius:2px;
border:solid 1px #A6A6A6;
}
::-webkit-scrollbar-thumb:active{
background-color:rgba(229,229,229,1);
-webkit-box-shadow:0 0 1px 0 rgba(0,0,0,.15) inset;
 box-shadow:0 0 1px 0 rgba(0,0,0,.15) inset;
}
::-webkit-scrollbar-thumb:hover{
background-color:rgba(229,229,229,.4);
}
::-webkit-scrollbar-corner {}
::-webkit-resizer {}
::-webkit-scrollbar-track {}
::-webkit-scrollbar-track-piece {}








.tree li {
	list-style-type:none;
	margin:0;
	padding:10px 5px 0 9px;
	position:relative
}
.tree li::before, .tree li::after {
	content:'';
	left:-20px;
	position:absolute;
	right:auto
}
.tree li::before {
	border-left:1px solid #999;
	bottom:50px;
	height:100%;
	top:0;
	width:1px
}
.tree li::after {
	border-top:1px solid #999;
	height:20px;
	top:25px;
	width:25px
}
.tree>li::before, .tree>li::after {
    border: 0;
}
.tree li span {
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:1px solid #999;
	border-radius:5px;
	display:inline-block;
	padding:3px 8px;
	text-decoration:none
}
.tree li.parent_li>span {
	cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
	border:0
}
.tree li:last-child::before {
	height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
	background:#eee;
	border:1px solid #94a0b4;
	color:#000
}
.ruleCheckBoxPanel > .btn-group{
    padding: 15px 49px;
}



#back-to-top{
    position: fixed;
    right: 0;
    top: 80%;
    display: none;
}
#back-to-top i{
    font-size: 30px;
    transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
}
</style>
@show