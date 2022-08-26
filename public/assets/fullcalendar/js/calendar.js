document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new FullCalendar.Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      locale: 'pt-br',
      navLinks:true,
      eventLimit:true,
      selectable:true,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
      eventDrop:function(event){
        alert('Event drop')
      },
      eventClick:function(event){
        alert('Event click')
      },
      eventResize:function(event){
        alert('Event Resize')
      },
      select:function(event){
        alert('Event select')
      },
      events:[
        {
          "title": "All Day Event",
          "start": "2020-09-01"
        },
        {
          "title": "Long Event",
          "start": "2020-09-07",
          "end": "2020-09-10"
        },
        {
          "id": "999",
          "title": "Repeating Event",
          "start": "2020-09-09T16:00:00-05:00"
        },
        {
          "id": "999",
          "title": "Repeating Event",
          "start": "2020-09-16T16:00:00-05:00"
        },
        {
          "title": "Conference",
          "start": "2020-09-11",
          "end": "2020-09-13"
        },
        {
          "title": "Meeting",
          "start": "2020-09-12T10:30:00-05:00",
          "end": "2020-09-12T12:30:00-05:00"
        },
        {
          "title": "Lunch",
          "start": "2020-09-12T12:00:00-05:00"
        },
        {
          "title": "Meeting",
          "start": "2020-09-12T14:30:00-05:00"
        },
        {
          "title": "Happy Hour",
          "start": "2020-09-12T17:30:00-05:00"
        },
        {
          "title": "Dinner",
          "start": "2020-09-12T20:00:00"
        },
        {
          "title": "Birthday Party",
          "start": "2020-09-13T07:00:00-05:00"
        },
        {
          "title": "Click for Google",
          "url": "http://google.com/",
          "start": "2020-09-28"
        }
      ],
      //recebe eventos do calendario
      
    });
    calendar.render();

  });