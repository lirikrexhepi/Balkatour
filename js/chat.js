Talk.ready.then(function () {
    var me = new Talk.User({
      id: '123456',
      name: 'Alice',
      email: 'alice@example.com',
      photoUrl: 'https://talkjs.com/images/avatar-1.jpg',
      welcomeMessage: 'Hey there! How are you? :-)',
    });
    window.talkSession = new Talk.Session({
      appId: 'thR0SNQn',
      me: me,
    });
    var other = new Talk.User({
      id: '654321',
      name: 'Sebastian',
      email: 'Sebastian@example.com',
      photoUrl: 'https://talkjs.com/images/avatar-5.jpg',
      welcomeMessage: 'Hey, how can I help?',
    });
  
    var conversation = talkSession.getOrCreateConversation(
      Talk.oneOnOneId(me, other)
    );
    conversation.setParticipant(me);
    conversation.setParticipant(other);
  
    var popup = window.talkSession.createPopup();
    popup.select(conversation);
    popup.mount({ show: false });

    var button = document.getElementById('chat');
button.addEventListener('click', function (event) {
  event.preventDefault();
  popup.show();

  
});

  });

  function buttonClicked(conversationId) {
    // assume `window.talkSession` has been set elsewhere
    var conversation = window.talkSession.getOrCreateConversation(conversationId);
  
    if (window.popup) {
      window.popup.show(); //in case popup is hidden
      window.popup.select(conversation); //select the conversation clicked on
    } else {
      //if there is no existing popup, create one
      window.popup = window.talkSession.createPopup();
      window.popup.select(conversation);
      window.popup.mount({ show: true });
    }
  }