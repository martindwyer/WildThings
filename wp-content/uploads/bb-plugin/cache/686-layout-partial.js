
(function($){$(function(){if(typeof $.fn.magnificPopup!=='undefined'){$('.fl-node-5a7e0b524cbe7 .fl-mosaicflow-content, .fl-node-5a7e0b524cbe7 .fl-gallery').magnificPopup({delegate:'.fl-photo-content a',closeBtnInside:false,type:'image',gallery:{enabled:true,navigateByImgClick:true,},'image':{titleSrc:function(item){}},callbacks:{open:function(){if(this.items.length>0){var parent,item,newIndex=0,newItems=[];$(this.items).each(function(i,data){item=$(this);if('undefined'!==typeof this.el){item=this.el;}
parent=item.parents('.fl-mosaicflow-item');newIndex=$(parent).attr('id').split('-').pop();newIndex=newIndex>0?newIndex-1:0;newItems[newIndex]=this;});this.items=newItems;}}}});}
$('.fl-node-5a7e0b524cbe7 .fl-mosaicflow-content').one('filled',function(){var hash=window.location.hash.replace('#','');if(hash!=''){FLBuilderLayout._scrollToElement($('#'+hash));}
if('undefined'!=typeof Waypoint){Waypoint.refreshAll();}}).mosaicflow({itemSelector:'.fl-mosaicflow-item',columnClass:'fl-mosaicflow-col',minItemWidth:300});});})(jQuery);