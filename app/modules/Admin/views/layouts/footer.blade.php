@section('footer')
<p>Rocet 2014</p>
<style>
aside .panel.panel-default {
    position: fixed;
    left: -80px;
    top: 30%;
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
option {
    /*color: brown;*/
    padding: 8px;
    margin: 2px;
    /*border: 1px solid rgb(18, 2, 2);*/
    /*background: goldenrod;*/
}
option:hover {
    /*color: #ffffff;*/
    /*background: #1273ff;*/
}

.ruleCheckBoxPanel label.form-inline {
    display: inline-block;
    width: 30%;
    height: 30px;
}

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

</style>
@show