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
        const sidebar1 = x('.sidebar1');
        const giaovien__filter = x('.giaovien__filter');
        const bottomDetail = x('.bottomDetail');
        const chitietgiaovien__videoMB = x('.chitietgiaovien__videoMB');
        const giaovien__list__card = xx('.giaovien__list__card');

        const removeAttributes = (element) => {
            for (let i = 0; i < element.attributes.length; i++) {
                element.removeAttribute(element.attributes[i].name);
            }
        };

        giaovien__list__card.forEach((item,index)=>{
            item.addEventListener('mouseover',()=>{
                console.log(1);
                if (sidebar1){
                    var offsetSidebar = header.offsetHeight+15 + 'px';
                    var stickySidebar = UIkit.sticky(sidebar1, {
                        'offset': offsetSidebar,
                        'start': 0.01 + 'px',
                        'end': true,
                    });
                    console.log('offsetSidebar',offsetSidebar);
                }
            });

            item.addEventListener('mouseout',()=>{
                console.log('turn off sticky');
            });
        });

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
            if (bottomDetail){
                var offsetBottomDetail = bottomDetail.offsetHeight + 'px';
                console.log('offsetBottomDetail',offsetBottomDetail);
                app.style.paddingBottom = offsetBottomDetail;
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