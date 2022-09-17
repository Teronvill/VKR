$(function () {
  // starting the container function
  "use strict";
  console.log('loaded');
  // start functions
  $('#SearchIcon').on('click', function () {
    $('form.search').css({
      'top': 0
    });
  });

  $('.out').on('click', function () {
    $('form.search').css({
      'top': -100
    });
  });
  // end with search

  // start with submnue
  var li = $('.nav-item');
  li.each(function () {
    var sub = $(this).children(".dropdown-menu");
    if (sub) {
      $(this).hover(function () {
        $(this).addClass('show');
      }, function () {
        $(this).removeClass('show');
      });
    };
  });
  // end submnue

  // display video
  if ($('#vlink')) {
    var link = $('#vlink'),
      img = $('#vimg'),
      videoFrame = $('#videoFrame'),
      videoLinks = $('#videoLinks');
    // remove poster
    link.on('click', function () {
      $(this).css({
        'display': 'none',
        'z-index': 0
      });
      img.css({
        'display': 'none',
        'z-index': 0
      });
      videoFrame.css({
        'z-index': 99
      })
    })
    // end remove the postr
    var btn = videoLinks.children().each(function () {
      $(this).on('click', function () {
        var val = $(this).val();
        videoFrame.attr("src", val);
        console.log(val);
      })
    });
    // out put videos

    // end output videos
    
    // strat collapsing the sidebar
    var sidebar = $('.sidebar'),
      content = $('.content'),
      on = $('#on'),
      off = $('#off');

    var hideSidebar = function () {
      sidebar.addClass('sidebarOff');
      content.addClass('contentOn');
      on.addClass('hide');
      off.removeClass('hide');
    };

    var showSidebar = function () {
      sidebar.removeClass('sidebarOff');
      content.removeClass('contentOn');
      off.addClass('hide');
      on.removeClass('hide');
    }

    on.on('click', function () {
      hideSidebar();
    })

    off.on('click', function () {
      showSidebar();
    })

    var autoResize = function () {
      if ($(window).width() <= 990) {
        hideSidebar();
      } else {
        showSidebar();
      }
    };

    $(window).bind('resize', function () {
      autoResize();
    })
    autoResize();

    // end collapsing the sidebar
  };
  // end display video

  // end container function
});

let msl_buttons = document.querySelectorAll('.tbl_btn >.btn');

let msl_block = document.querySelectorAll('.block');


function togglediv(block) {
  msl_block.forEach(item => {
    item.classList.add('hide');
  });
  let sBlock = document.querySelector(block);

  sBlock.classList.toggle('hide');
}
var inputs=$('input');
$.each(inputs,function(index,value){
value.placeholder="_____________________";
});
function selectTr (el) {
  trs=$('tr');
  $.each(inputs,function(index,value){
    value.classList.remove('selectr');
    });
    el.classList.add('selectr');
};
$(function() {
 $('table').on('click', 'tr', function() {
  trs=$('tr');
  $.each(trs,function(index,value){
    value.classList.remove('selectr');
    });
  this.classList.add('selectr');
 })

})
$(function () {
  $('.table').on('click', '#change_serv', function () {
    let s_id = ($(this).find('.s_id').html());
    let s_name = ($(this).find('.service').html());
    $('#s_id').val(s_id);
    $('#s_name').val(s_name);
    

  });
});

$(function () {
  $('.table').on('click', '#change_req', function () {
    let r_id = ($(this).find('.r_id').html());
    let r_status = ($(this).find('.r_status').html());
    $('#r_id').val(r_id);
    $('#r_status').val(r_status);
  });
});

$(function () {
  $('.table').on('click', '#change_nom', function () {
    let n_id = ($(this).find('.n_id').html());
    let n_name = ($(this).find('.n_name').html());
    let n_marking = ($(this).find('.n_marking').html());
    let n_size = ($(this).find('.n_size').html());
    let n_desc = ($(this).find('.n_desc').html());
    let n_price = ($(this).find('.n_price').html());
    $('#n_id').val(n_id);
    $('#n_name').val(n_name);
    $('#n_marking').val(n_marking);
    $('#n_size').val(n_size);
    $('#n_desc').val(n_desc);
    $('#n_price').val(n_price);
  });
});
$(function () {
  $('.table').on('click', '#change_d', function () {
    let d_id = ($(this).find('.d_id').html());
    let name_d = ($(this).find('.name_d').html());
    let phone_d = ($(this).find('.phone_d').html());
    $('#d_id').val(d_id);
    $('#name_d').val(name_d);
    $('#phone_d').val(phone_d);

  });
});
$(function () {
  $('.table').on('click', '#change_c', function () {
    let c_id = ($(this).find('.c_id').html());
    let c_name = ($(this).find('.c_name').html());
    let cont_name = ($(this).find('.cont_name').html());
    let email = ($(this).find('.email').html());
    let c_phone = ($(this).find('.c_phone').html());
    let c_date = ($(this).find('.c_date').html());
    $('#c_id').val(c_id);
    $('#c_name').val(c_name);
    $('#cont_name').val(cont_name);
    $('#email').val(email);
    $('#c_phone').val(c_phone);
    $('#c_date').val(c_date);

  });
});

$(function () {
  $('.table').on('click', '#change_o', function () {
    let o_id = ($(this).find('.o_id').html());
    let del_id = ($(this).find('.del_id').html());
    let war_id = ($(this).find('.war_id').html());
    let cli_id = ($(this).find('.cli_id').html());
    let address = ($(this).find('.address').html());
    let comment = ($(this).find('.comment').html());
    let o_date = ($(this).find('.o_date').html());
    let status = ($(this).find('.status').html());
    $('#o_id').val(o_id);
    $('#del_id').val(del_id);
    $('#war_id').val(war_id);
    $('#cli_id').val(cli_id);
    $('#address').val(address);
    $('#comment').val(comment);
    $('#o_date').val(o_date);
    $('#status').val(status);

  });
});
$(function () {
  $('.table').on('click', '#change_ca', function () {
    let id_ca = ($(this).find('.id_ca').html());
    let id_se = ($(this).find('.id_se').html());
    let id_no = ($(this).find('.id_no').html());
    let id_st = ($(this).find('.id_st').html());
    let num = ($(this).find('.num').html());
    $('#id_ca').val(id_ca);
    $('#id_se').val(id_se);
    $('#id_no').val(id_no);
    $('#id_st').val(id_st);
    $('#num').val(num);

  });
});
$(function () {
  $('.table').on('click', '#change_w', function () {
    var w_id = ($(this).find('.w_id').html());
    var name_w = ($(this).find('.name_w').html());
    var address_w = ($(this).find('.address_w').html());
    var phone_w = ($(this).find('.phone_w').html());
    $('#w_id').val(w_id);
    $('#name_w').val(name_w);
    $('#address_w').val(address_w);
    $('#phone_w').val(phone_w);


  });
});
$(function () {
  $('.table').on('click', '#change_st', function () {
    var st_id = ($(this).find('.st_id').html());
    var fio = ($(this).find('.fio').html());
    var department = ($(this).find('.department').html());
    var post = ($(this).find('.post').html());
    var phone_st = ($(this).find('.phone_st').html());
    var email_st = ($(this).find('.email_st').html());
    $('#st_id').val(st_id);
    $('#fio').val(fio);
    $('#department').val(department);
    $('#post').val(post);
    $('#phone_st').val(phone_st);
    $('#email_st').val(email_st);


  });
});
$(function () {
  $('#sub_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_s.php',
      data: $('#s_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});
$(function () {
  $('#del_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_s.php',
      data: $('#s_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});

$(function () {
  $('#r_sub_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_r.php',
      data: $('#r_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});
$(function () {
  $('#r_del_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_r.php',
      data: $('#r_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});

$(function () {
  $('#n_sub_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_n.php',
      data: $('#n_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});
$(function () {
  $('#n_del_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_n.php',
      data: $('#n_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});

$(function () {
  $('#d_sub_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_d.php',
      data: $('#d_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});
$(function () {
  $('#d_del_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_d.php',
      data: $('#d_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});
$(function () {
  $('#c_sub_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_c.php',
      data: $('#c_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});
$(function () {
  $('#c_del_btn').click(function () {

    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_c.php',
      data: $('#c_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });

  });
});

$(function () {
  $('#o_sub_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_o.php',
      data: $('#o_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#o_del_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_o.php',
      data: $('#o_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#ca_sub_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_ca.php',
      data: $('#ca_form').serialize(),
      dataType: 'html',
      success: function () {
        
     
        
        location.reload();
  
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#ca_del_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_ca.php',
      data: $('#ca_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#w_sub_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_w.php',
      data: $('#w_form').serialize(),
      dataType: 'html',
      success: function () {
        
     
        
        location.reload();
  
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#w_del_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_w.php',
      data: $('#w_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#st_sub_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/post_st.php',
      data: $('#st_form').serialize(),
      dataType: 'html',
      success: function () {
        
     
        
        location.reload();
  
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});
$(function () {
  $('#formR').click(function () {


  $.ajax({
          type: 'POST',
          url: '/Admin_panel/report1.php',
          data: $('#formRep').serialize(),
          dataType: 'html',
          success: function (data) {
            window.location.href = '/Admin_panel/report1.php';
           
           
    },
          error: function (xhr, str) {
                  alert('Возникла ошибка ' + xhr.responseCode);
          }
  });
}); });



$(function () {
  $('#st_del_btn').click(function () {
    $.ajax({
      type: 'POST',
      url: '/Admin_panel/tables/del_st.php',
      data: $('#st_form').serialize(),
      dataType: 'html',
      success: function () {
        location.reload();
      },
      error: function (xhr, str) {
        alert('Возникла ошибка ' + xhr.responseCode + data);
      }
    });
  });
});

