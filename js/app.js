console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const app = x('.app');
        const header = x('.header');
        const video_intro = x('#video-intro');
        const bottomSticky = x('.bottomSticky');
        const sidebar = x('.sidebar');
        const giaovien__filter = x('.giaovien__filter');

        function sideBarSticky() {
            if (sidebar){
                var offsetSidebar = header.offsetHeight+15 + 'px';
                var stickySidebar = UIkit.sticky(sidebar, {
                    'offset': offsetSidebar,
                    'start': 0.01 + 'px',
                    'end': true,
                });
                console.log('offsetSidebar',offsetSidebar);
            }
        }
        sideBarSticky();

        if (video_intro){
            console.log('video_intro',video_intro);
            UIkit.video(video_intro, {
                'autoplay': 'inview',
            });
        }

        function paddingTopApp() {
            if (header){
                var offsetHeader = header.offsetHeight + 'px';
                console.log('offsetHeader',offsetHeader);
                app.style.paddingTop = offsetHeader;
            }
            if (bottomSticky){
                var offsetBottomSticky = bottomSticky.offsetHeight + 'px';
                console.log('offsetBottomSticky',offsetBottomSticky);
                app.style.paddingBottom = offsetBottomSticky;
            }
        }
        paddingTopApp();

        onresize = (event) => {
            paddingTopApp();
        };

        document.onscroll = function () {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;
            console.log('scrollTop',scrollTop);
            paddingTopApp();
            if (scrollTop > 0){

            }else {

            }
        }


    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})