@if( $animates = ['bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'swing', 'tada', 'wobble', 'bounceIn', 'bounceInDown', 'bounceInLeft', 'bounceInRight', 'bounceInUp', 'bounceOut', 'bounceOutDown', 'bounceOutLeft', 'bounceOutRight', 'bounceOutUp', 'fadeIn', 'fadeInDown', 'fadeInDownBig', 'fadeInLeft', 'fadeInLeftBig', 'fadeInRight', 'fadeInRightBig', 'fadeInUp', 'fadeInUpBig', 'fadeOut', 'fadeOutDown', 'fadeOutDownBig', 'fadeOutLeft', 'fadeOutLeftBig', 'fadeOutRight', 'fadeOutRightBig', 'fadeOutUp', 'fadeOutUpBig', 'flip', 'flipInX', 'flipInY', 'flipOutX', 'flipOutY', 'lightSpeedIn', 'lightSpeedOut', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight', 'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight', 'hinge', 'rollIn', 'rollOut', 'zoomIn', 'zoomInDown', 'zoomInLeft', 'zoomInRight', 'zoomInUp', 'zoomOut', 'zoomOutDown', 'zoomOutLeft', 'zoomOutRight', 'zoomOutUp'] )
<h3>Animate CSS</h3>
<div class="panel panel-default">
    <div class="panel-body animate">
        <span>
            <i class="fa fa-html5"></i>
        </span>
    </div>
</div>
<div class="btn-group animate-btn">
    @foreach($animates as $animate)
    <a class="btn btn-default">{{ $animate }}</a>
    @endforeach
</div>
<style>
    .animate > span {
        font-size: 100px; -webkit-font-smoothing: antialiased;
    }
    .animate > span > i{
        line-height: inherit;
        color: #f35626;
        background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -webkit-animation: hue 60s infinite linear;
    }
    @-webkit-keyframes hue {
        from {
            -webkit-filter: hue-rotate(0deg);
        }

        to {
            -webkit-filter: hue-rotate(-360deg);
        }
    }
</style>
<script>
    window.onload = function(){
        $('.animate-btn').click(function(e){
            e.preventDefault();
            var anim = e.target.innerHTML;
            $('.animate>span').removeClass().addClass(anim + ' animated' );
        });
    }

</script>
@endif