$(document).ready(function() {
	var day = Date.today().getDayName();
	var date = Date.today();
	// messages
	var week10 = '<span> of week 10</span><span class="spring-session">, spring session.</span>';
	var week11 = '<span> of week 11</span><span class="spring-session">, spring session.</span>';
	var week12 = '<span> of week 12</span><span class="spring-session">, spring session.</span>';
	var week13 = '<span> of week 13</span><span class="spring-session">, spring session.</span>';
	var studyRecess = '<span> of study recess</span><span class="spring-session">, spring session.</span>';
	var studyRecess = '<span> of study recess</span><span class="spring-session">, spring session.</span>';	
	$('.day').append(day);
	$('.date').append(date);	
	// session dates
	$("span:contains('Oct 08'),span:contains('Oct 09'),span:contains('Oct 10'),span:contains('Oct 11')").after(week10);
	$("span:contains('Oct 14'),span:contains('Oct 15'),span:contains('Oct 16'),span:contains('Oct 17'),span:contains('Oct 18')").after(week11);
	$("span:contains('Oct 21'),span:contains('Oct 22'),span:contains('Oct 23'),span:contains('Oct 24'),span:contains('Oct 25')").after(week12);
	$("span:contains('Oct 28'),span:contains('Oct 29'),span:contains('Oct 30'),span:contains('Oct 31'),span:contains('Nov 1')").after(week13);
	$("span:contains('Nov 04'),span:contains('Nov 05'),span:contains('Nov 06'),span:contains('Nov 07'),span:contains('Oct 18')").after(studyRecess);
	$('.date').remove();
});