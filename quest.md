module assets ??
rule  ...
custom table field ..
model aggregate



uedit
dialog attachment
js   ~ 700


$btns = $('<div class="file-panel"><span class="cancel">' + lang.uploadDelete + '</span></div>').appendTo(item);
                    $btns.on('click', 'span', function () {
                        var index = $(this).index();
                        switch (index){
                            case 0:
                                console.log(index, $(this.parentNode.parentNode).attr('data-url'));
                                break;
                        }

                    });

css ~ 800
#online .list div.file-panel {
    position: absolute;
    height: 0;
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorstr='#80000000', endColorstr='#80000000') \0;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    top: 0;
    left: 0;
    overflow: hidden;
    z-index: 300;


    -webit-transition: 400ms ease-out;
    -moz-transition: 400ms ease-out;
    -o-transition: 400ms ease-out;
    -ms-transition: 400ms ease-out;
    transition: 400ms ease-out;

}
#online .list li:hover div.file-panel{
    height: 30px;

    -webit-transition: 400ms ease-out;
    -moz-transition: 400ms ease-out;
    -o-transition: 400ms ease-out;
    -ms-transition: 400ms ease-out;
    transition: 400ms ease-out;

}
#online .list div.file-panel span {
    width: 24px;
    height: 24px;
    display: inline;
    float: right;
    text-indent: -9999px;
    overflow: hidden;
    background: url(images/icons.png) no-repeat;
    background: url(images/icons.gif) no-repeat \9;
    margin: 5px 1px 1px;
    cursor: pointer;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

#online .list div.file-panel span.cancel {
    background-position: -48px -24px;
}

#online .list div.file-panel span.cancel:hover {
    background-position: -48px 0;
}