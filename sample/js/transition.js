

function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}
function generate_filename(arg_path,arg_prefix,arg_index,arg_type)
{
	temp_path = arg_path + '/'+ arg_prefix + pad(arg_index,2).toString()+'.'+arg_type;
	return temp_path;
}


let index_val = 0;

function next_frame()
{
	if(index_val == Math.floor(no_of_frames /2)){
		//to handle the necessary changes
		//changes occur at the middle of the animation
		$('#cover').hide();
		$('#details').show();
	}
	
	if(index_val == no_of_frames){
		index_val = 0;
		return;
	}
	
	else{
		index_val++;
		$("#img_frame").attr("src",generate_filename(path,prefix,index_val,extension));
	}
	setTimeout(next_frame,50)
}
//document.addEventListener('wheel',function(){next_frame()});
//$("button").on('click',function(){alert('sample')})
//$('body').on('wheel',function(){setTimeout(next_frame,1000);})
//$('#test').on('click',function(){setTimeout(next_frame,500)});
	
/*
$(window).bind('mousewheel DOMMouseScroll', function(event){
    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
        // scroll up
		setTimeout(next_frame,700);
		
    }
    else {
        // scroll down
		setTimeout(next_frame,700);
    }
});	
*/

/*$('body').on('wheel', throttle(function (event) {
  next_frame();
}, 2000));
*/

path = 'sequences/solutions-01'
prefix = 'solutions-01_'
extension = 'png'
no_of_frames = 35
var throttled = _.throttle(next_frame,2000,{trailing:false});
$('body').on('wheel',throttled);


/*--------------------------------------------------------------------*/
/*
path = 'sequences/solutions-02'
prefix = 'solutions-02_'
extension = 'png'
no_of_frames = 29
var throttled = _.throttle(next_frame,2000,{trailing:false});
$('body').on('wheel',throttled);

/*--------------------------------------------------------------------*/