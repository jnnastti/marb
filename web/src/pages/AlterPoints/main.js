    var lastClicked = null;
    
    function editClick(num) {
        var buttonClick = document.querySelector(`#buttonEdit${num}`);

        if(lastClicked) {
            lastClicked.style.display = 'block';
        }

        buttonClick.style.display = 'none';
        lastClicked = buttonClick;

        //console.log('oi');
    }
    