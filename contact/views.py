import json
from django.core.mail import EmailMessage
from django.http import JsonResponse


def send_email(request):
    if request.method == "POST":
        body = json.loads(request.body)

        subject = body["subject"]
        message = body["message"]
        email = body["email"]

        email = EmailMessage(
            subject=f"[Robo-One.la] - {subject}",
            body=f"{message}",
            from_email="contacto@robo-one.la",
            to=[
                "contacto@robo-one.la",
            ],
            reply_to=[email],
        )

        email.send(fail_silently=False)

        print("*" * 10)

    return JsonResponse({"status": "ok"})