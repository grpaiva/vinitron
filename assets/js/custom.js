$( document ).ready(function() {

		var arrayLength = array.length;

		for (var i = 0, tr, td; i < arrayLength; i++) {
		    tr = document.createElement('tr');
		    td = document.createElement('td');
		    td.appendChild(document.createTextNode(array[i]));
		    tr.appendChild(td);
		    document.getElementById('table-a').appendChild(tr);
		}

		var brrayLength = brray.length;

		for (var i = 0, br, bd; i < brrayLength; i++) {
		    br = document.createElement('tr');
		    bd = document.createElement('td');
		    bd.appendChild(document.createTextNode(brray[i]));
		    br.appendChild(bd);
		    document.getElementById('table-b').appendChild(br);
		}

		var crrayLength = crray.length;

		for (var i = 0, cr, cd; i < crrayLength; i++) {
		    cr = document.createElement('tr');
		    cd = document.createElement('td');
		    cd.appendChild(document.createTextNode(crray[i]));
		    cr.appendChild(cd);
		    document.getElementById('table-c').appendChild(cr);
		}

		var drrayLength = drray.length;

		for (var i = 0, dr, dd; i < drrayLength; i++) {
		    dr = document.createElement('tr');
		    dd = document.createElement('td');
		    dd.appendChild(document.createTextNode(drray[i]));
		    dr.appendChild(dd);
		    document.getElementById('table-d').appendChild(dr);
		}

		var errayLength = erray.length;

		for (var i = 0, er, ed; i < errayLength; i++) {
		    er = document.createElement('tr');
		    ed = document.createElement('td');
		    ed.appendChild(document.createTextNode(erray[i]));
		    er.appendChild(ed);
		    document.getElementById('table-e').appendChild(er);
		}

		var frrayLength = frray.length;

		for (var i = 0, fr, fd; i < frrayLength; i++) {
		    fr = document.createElement('tr');
		    fd = document.createElement('td');
		    fd.appendChild(document.createTextNode(frray[i]));
		    fr.appendChild(fd);
		    document.getElementById('table-f').appendChild(fr);
		}

		$( "#target" ).click(function() {

			var one = array[Math.floor(Math.random() *array.length)];
			var two = brray[Math.floor(Math.random() *brray.length)];		
			var three = crray[Math.floor(Math.random() *crray.length)];
			var four = drray[Math.floor(Math.random() *drray.length)];
			var five = erray[Math.floor(Math.random() *erray.length)];
			var six = frray[Math.floor(Math.random() *frray.length)];

			function remove_focus(id){
				setTimeout(function() { 
					$(id).removeClass('focus'); 
				}, 200);
			}

			if ($('input[name="keepA"]:checked').length == 0){
				$('#one').replaceWith('<textarea id="one" class="form-control focus" rows="10" readonly>' + one + '</textarea>');
				remove_focus('#one');
			}
			
			if ($('input[name="keepB"]:checked').length == 0){
				$('#two').replaceWith('<textarea id="two" class="form-control focus" rows="10" readonly>' + two + '</textarea>');
				remove_focus('#two');
			}

			if ($('input[name="keepC"]:checked').length == 0){
				$('#three').replaceWith('<textarea id="three" class="form-control focus" rows="10" readonly>' + three + '</textarea>');
				remove_focus('#three');
			}

			if ($('input[name="keepD"]:checked').length == 0){
				$('#four').replaceWith('<textarea id="four" class="form-control focus" rows="10" readonly>' + four + '</textarea>');
				remove_focus('#four');
			}

			if ($('input[name="keepE"]:checked').length == 0){
				$('#five').replaceWith('<textarea id="five" class="form-control focus" rows="10" readonly>' + five + '</textarea>');
				remove_focus('#five');
			}

			if ($('input[name="keepF"]:checked').length == 0){
				$('#six').replaceWith('<textarea id="six" class="form-control focus" rows="10" readonly>' + six + '</textarea>');
				remove_focus('#six');
			}

		});

		$('input#viewCheck').click(function() {
		    var $this = $(this); 
		    if ($this.is(':checked')) {
		        $( "#lists" ).removeClass( "hidden" ); 
		    }else{
		    	$( "#lists" ).addClass( "hidden" ); 
		    }
		});

});