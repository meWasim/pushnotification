importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
   
firebase.initializeApp({
    apiKey: "AIzaSyBBjpWSVKRH2xx669xqkG8Z0kb42sc9e7Q",
    projectId: "push-notification-55218",
    messagingSenderId: "998268928217",
    appId: "1:998268928217:web:931a840f95ad502cb9fec8"
});
  
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});