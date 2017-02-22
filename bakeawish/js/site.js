$(document).ready( function() {
	
	setupMobileMenu();

	
	$('.primaryNavLink').click(function(event) {
		event.preventDefault();
		$('#mobileMenu').toggleClass('show-menu');
	});
	
	console.log('haskdjhajksdhlkasd')
	galleryLayout()
	
});

$(window).load(function() {

})


function setupMobileMenu() {
	var primaryNav = $('#primary-menu').clone().filter(":last").detach();

	$("#mobileMenu").append(primaryNav);

    $('#mobileMenu').delegate(".close", "click", function() {
        $('#mobileMenu').removeClass('show-menu');
    });

    $('#mobileMenu .primaryNav > li').addClass('inactive').filter('.inPath').toggleClass('active inactive');
}

function galleryLayout() {
    var gallery = $('.goodie-gallery');
    var elements = gallery.find('.goodie-thumbnail');
    var padding = gallery.outerHeight() - gallery.height();
    var numColumns = Math.round(gallery.innerWidth() / elements.first().outerWidth());
    var rows = 1;
    var elementHeights = elements.map(function() {
        return $(this).outerHeight(true);
    }).get();
    var totalElementHeights = elementHeights.reduce(getSum);

    var tallElement = Math.max.apply(null, elementHeights);
    var galleryHeight = tallElement;

    if (elements.length > numColumns) {
        var columns = [{firstElement:0,height:0,whiteSpace:0,spaceAdjust:0}];
        var columnHeight = [0];
        var columnWhiteSpace = [0];
        var currentColumn = 0;
        galleryHeight = Math.ceil(totalElementHeights/numColumns);
        console.log(galleryHeight);

        for (var element in elements) {

            var index = Number(element);
            var thisHeight = elementHeights[index];
            console.log(thisHeight);

            // This element height equals outer container height 
            // OR this element height plus the current column height equals outer container height
            if(thisHeight == galleryHeight || (thisHeight + columns[currentColumn]).height == galleryHeight) {
                console.log('case 1');
                columns[currentColumn].height = galleryHeight;
                columns[currentColumn].spaceAdjust = elementHeights[index+1];
                columns.push({
                    firstElement:index+1,
                    height:0,
                    whiteSpace:0
                });
                currentColumn += 1;
            }
            // This element height plus existing column height is larger than the outer container height
            else if ((thisHeight + columns[currentColumn].height) > galleryHeight) {
                console.log('case 2');
                columns[currentColumn].whiteSpace = galleryHeight - columns[currentColumn].height;
                columns[currentColumn].spaceAdjust = thisHeight - columns[currentColumn].whiteSpace;
                columns.push({
                    firstElement:index,
                    height:thisHeight,
                    whiteSpace:0
                });
                currentColumn += 1;
            }
            // This element height plus the next element height is greater than the outer container height
            else if ((thisHeight + elementHeights[index+1]) > galleryHeight) {
                console.log('case 3');
                columns[currentColumn].height += thisHeight;
                columns[currentColumn].whiteSpace = galleryHeight - columns[currentColumn].height;
                columns[currentColumn].spaceAdjust = elementHeights[index+1] - columns[currentColumn].whiteSpace;
                columns.push({
                    firstElement:index,
                    height:thisHeight,
                    whiteSpace:0
                });
                currentColumn += 1;
            }
            // This element height plus the current column height does not equal the outer container height
            else if ((thisHeight + elementHeights[index+1]) < galleryHeight) {
                console.log('case 4');
                columns[currentColumn].height += thisHeight;
            } else {
                console.log('error');
                // console.log(elements);
                // console.log(thisHeight + elements[index+1])
                // console.log('gallery height ' + galleryHeight);
                // console.log(typeof galleryHeight);
                // console.log('this height ' + thisHeight);
                // console.log(typeof thisHeight);
                // console.log('next height ' + elements[index+1]);
                // console.log(typeof elements[index+1]);
                // console.log('element is ' + index);
                // console.log(typeof index);
                // console.log('current column height ' + columnHeight[currentColumn]);
                // console.log(typeof columnHeight[currentColumn]);
                // console.log('current white space ' + columnWhiteSpace[currentColumn]);
                // console.log(typeof columnWhiteSpace[currentColumn]);

                break;
            }

            if (columns.length - 1 == numColumns) {
                columns.pop();
                var remainingElements = elementHeights.slice(index);
                var remainingHeight = remainingElements.reduce(getSum);
                var spaceNeeded = remainingHeight - columns[columns.length - 1].whiteSpace;
                
                console.log('RE = ' + remainingElements);
                console.log('RH = ' + remainingHeight);
                console.log(spaceNeeded);
                // while (remainingHeight > 0) {
                //     var smallAdjust = Math.min.apply(null, columns.spaceAdjust);
                //     galleryHeight += smallAdjust;
                //     for (var column in columns) {
                //         var columnIndex = Number(column);
                //         console.log(columnIndex);
                //         break;
                //         columns[columnIndex].whiteSpace += smallAdjust;
                //         if (elementHeights[columns[columnIndex+1].firstElement] = columns[columnIndex].whiteSpace) {
                //             columns[columnIndex].whiteSpace = 0;
                //             columns[columnIndex].firstElement += 1;
                //             columns[columnIndex].spaceAdjust = elementHeights[columns[columnIndex+1].firstElement+1];
                //         }
                //         else if (elementHeights[columns[columnIndex+1].firstElement] < columns[columnIndex].whiteSpace) {
                //             columns[columnIndex].whiteSpace = galleryHeight - (columns[columnIndex].height + elementHeights[columns[columnIndex+1].firstElement]);
                //             columns[columnIndex].firstElement += 1;
                //             columns[columnIndex].spaceAdjust = elementHeights[columns[columnIndex+1].firstElement+1] - columns[columnIndex].whiteSpace;
                //         }
                //     }
                //     remainingHeight -= columns[columns.length - 1].whiteSpace;
                // }
                break;
            }

        }
    }

    galleryHeight = Math.ceil(galleryHeight) + Math.ceil(padding);

    gallery.css('height', galleryHeight);

    function getSum(total, current){
        return total + current;
    }
}