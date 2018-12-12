
function DisableButtons() {
    if (!Sys.WebForms.PageRequestManager._instance._postBackSettings.async) {

        var sRegisteredPostBackControls = Sys.WebForms.PageRequestManager._instance._postBackControlIDs;

        for (var i = 0; i < sRegisteredPostBackControls.length; i++) {
            if (sRegisteredPostBackControls[i] == Sys.WebForms.PageRequestManager._instance._activeElement.name)
                return true;
        }

        self.setTimeout("DisableButtonsGo()", 100);

    }
    return true;
}

function DisableButtonsGo() {
    var allSelectElements = document.getElementsByTagName("input");

    for (var i = 0; i < allSelectElements.length; i++) {
        if (allSelectElements[i].type == "submit")
            allSelectElements[i].disabled = "true";
    }
}




function hideCookieBox() {
    obj = document.getElementById('divCookie');
    obj.style.opacity = '1';

    afi = function () {
        if (obj.style.opacity > 0) {
            var crnt = Number(obj.style.opacity);
            var nOp = crnt - 0.1;
            obj.style.opacity = String(nOp);
            if (obj.style.opacity < 0.2) {
                obj.style.display = "none"
            }
            setTimeout('afi()', 50);
        }

    }
    afi();
}


//SLIDER SCRIPT
var bStop = false;

function OnClientItemShown(rotator, eventArgs) {
    //setSelectedItem(eventArgs.get_item().get_index(), sender);

    //alert('test2: ' + addresses[eventArgs.get_item().get_index()]);
    //alert('TEST' + eventArgs.get_item().get_index());

   //var currentIndex = eventArgs.get_item().get_index();
    // Change the scroll direction of the rotator, in case it has displayed its last item for the current scroll direction. 

    if (!bStop) {
        //if (0 == currentIndex) {
        //    //bStop
        //    window.clearInterval(rotator.autoIntervalID);
        //    rotator.autoIntervalID = null;

        //    rotator.autoIntervalID = window.setInterval(function () {
        //        rotator.showNext(Telerik.Web.UI.RotatorScrollDirection.Left);
        //    }, rotator.get_frameDuration());
        //}

        //if (currentIndex == (rotator.get_items().length - 1)) {
        //    //bStop
        //    window.clearInterval(rotator.autoIntervalID);
        //    rotator.autoIntervalID = null;

        //    rotator.autoIntervalID = window.setInterval(function () {
        //        rotator.showNext(Telerik.Web.UI.RotatorScrollDirection.Right);
        //    }, rotator.get_frameDuration());
        //}

    }

}



function OnClientLoad(rotator, args) {
    if (!rotator.autoIntervalID) {
        rotator.autoIntervalID = window.setInterval(function () {
            rotator.showNext(Telerik.Web.UI.RotatorScrollDirection.Left);
        }, rotator.get_frameDuration());
    }
}



function OnClientButtonClick(rotator, args) {


    //refreshButtonsState(clickedButton, rotator)
    window.clearInterval(rotator.autoIntervalID);
    rotator.autoIntervalID = null;

    bStop = true;
}

//Mobile Menu
$(document).ready(function () {
    $("#lnkMenuLines").click(function () {
        $("#divMobileMenu").fadeToggle(400);
    });

    $(window).resize(function () {
        if ($(window).width() >= 400) {
            $("#divMobileMenu").hide();
        }
    });
});