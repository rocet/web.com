@section('foot')
<h3>foot</h3>


<script type="text/javascript">
    window.onload = function () {
        element({
            tag: 'demo',
            attrs: {'ng-controller': 'DemoCtrl', 'init': '{}', 'id': 'ss', 'op': 'ff'},
            html: 'odpwqi',
            parent: document.body
        });
        $(function () {
            // console.log($('#ss').attr('op') );
        });
        angular.element(document).ready(function () {
            angular.module('Demo', []).controller('DemoCtrl', ['$http', function ($scope, $http) {
                $scope.val = 'scope.val';
            }]).directive('demo', ['$http', '$compile', function ($http, $compile) {
                return {
                    restrict: "E",
                    scope: true,
                    replace: true,
                    controller: function ($scope, $element, $attrs) {
                        $scope.val = 'directive.scope.val';
                    },
                    template: function (tElement, tAttrs) {
                        return '<pre>directive.template</pre>';
                    },
                    link: function (scope, element, attrs, controller) {
                        var elem = '<pre>' + scope.val + '</pre>';
                        element.replaceWith($compile(elem)(scope));
                    },
                    compile: function (element, attrs, link) {
                        return function (scope) {
                            element.replaceWith($compile('<pre>sss</pre>')(scope));
                        };
                    }
                }
            }]);
            angular.bootstrap(document, ['Demo']);
        });

        $(document.body).dblclick(function () {
            element({tag: 'div', html: 'odpwqi', parent: document.body});
        });
    }
</script>
<script type="text/javascript">
    (function (window) {
        window.merge = function () {
            var args = Array.prototype.slice.call(arguments),
                    argl = args.length,
                    arg,
                    retObj = {},
                    k = '',
                    argil = 0,
                    j = 0,
                    i = 0,
                    ct = 0,
                    toStr = Object.prototype.toString,
                    retArr = true;

            for (i = 0; i < argl; i++) {
                if (toStr.call(args[i]) !== '[object Array]') {
                    retArr = false;
                    break;
                }
            }

            if (retArr) {
                retArr = [];
                for (i = 0; i < argl; i++) {
                    retArr = retArr.concat(args[i]);
                }
                return retArr;
            }

            for (i = 0, ct = 0; i < argl; i++) {
                arg = args[i];
                if (toStr.call(arg) === '[object Array]') {
                    for (j = 0, argil = arg.length; j < argil; j++) {
                        retObj[ct++] = arg[j];
                    }
                } else {
                    for (k in arg) {
                        if (arg.hasOwnProperty(k)) {
                            if (parseInt(k, 10) + '' === k) {
                                retObj[ct++] = arg[k];
                            } else {
                                retObj[k] = arg[k];
                            }
                        }
                    }
                }
            }
            return retObj;
        }
        window.mergeRecursive = function (arr1, arr2) {
            var idx = '';
            if (arr1 && Object.prototype.toString.call(arr1) === '[object Array]' && arr2 && Object.prototype.toString.call(arr2) === '[object Array]') {
                for (idx in arr2) {
                    arr1.push(arr2[idx]);
                }
            } else if ((arr1 && (arr1 instanceof Object)) && (arr2 && (arr2 instanceof Object))) {
                for (idx in arr2) {
                    if (idx in arr1) {
                        if (typeof arr1[idx] === 'object' && typeof arr2 === 'object') {
                            arr1[idx] = merge(arr1[idx], arr2[idx]);
                        } else {
                            arr1[idx] = arr2[idx];
                        }
                    } else {
                        arr1[idx] = arr2[idx];
                    }
                }
            }
            return arr1;
        };
        window.element = function (conf) {
            var defultConf = {
                        tag: 'div',
                        attrs: {},
                        html: '',
                        parent: document.body
                    },
                    conf = conf ? merge(defultConf, conf) : defultConf,
                    that = this;
            this.build = function (tag, attrs, html, parent) {
                var el = document.createElement(tag);
                for (var i in attrs) {
                    el.setAttribute(i, attrs[i]);
                }
                ;
                el.innerHTML = html;
                if (parent) {
                    parent.appendChild(el);
                }
                return el;
            }
            this.build(conf.tag, conf.attrs, conf.html, conf.parent);
        };
    })(window);
</script>
@show