'use strict';

(function(){
    var friends = [
        {name: 'Oliver', books: ['Ansible for DevOps', 'Servers for hackers']},
        {name: 'Barry', books: ['Working effectively with unit tests', '50 quick ideas for your tests']},
        {name: 'Jessica', books: ['Understanding the 4 rules of simple design', 'Principles of package design']},
        {name: 'Clark', books: ['Selling test driven projects']}
    ];
    
    var $friendSelect = $('#friend');
    var options = '';
    
    friends.forEach(function (friend, i) {
        options += '<option value="' + (i + 1) + '">' + friend.name + '</option>';
    });

    $friendSelect.html(options);

})();