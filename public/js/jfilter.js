$(function () {
    $("table").tablework();
});
$.fn.tablework = function() {
    return this.each(function() {
        var $table = $(this),
            $thead = $table.find('thead');
        !$thead.length && ($thead = $('<thead/>').prependTo($table));
        var $tr = $('<tr/>').prependTo($thead),
            hide = {};
        $("tbody tr:first>", $table).each(function(indx, element) {
            var range = ['Без выбора'],
                $td = $("tbody tr :nth-of-type(" + (indx + 1) + ")", $table),
                temp = {};
            $td.each(function(i, el) {
                var text = $(this).text()
                if (!temp[text]) {
                    range.unshift(text);
                    temp[text] = true
                };
            });

            var $select = $('<select/>', {
                'change': function() {
                    var val = this.value;
                    hide[indx] = [];
                    this.selectedIndex && $td.each(function(i, el) {
                        $(this).text() != val && hide[indx].push(i)
                    });
                    var range = [];
                    for (var k in hide) range = range.concat(hide[k]);

                    var $tr = $("tbody tr", $table);
                    $tr.show();
                    $.each(range, function(i, el) {
                        $tr.eq(el).hide()
                    });
                }

            });
            $.each(range, function() {
                $('<option/>', {
                    text: this
                }).prependTo($select);
            });
            $('<td/>').append($select).appendTo($tr);
        });

    });
};