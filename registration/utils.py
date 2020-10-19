import requests


def re_captcha(request, secret_key):
    """ Begin reCAPTCHA validation """

    if secret_key == None:
        return {"valid": True}

    recaptcha_response = request.POST.get("g-recaptcha-response")

    data = {"secret": secret_key, "response": recaptcha_response}

    r = requests.post("https://www.google.com/recaptcha/api/siteverify", data=data)
    result = r.json()

    if not result["success"]:
        return {"valid": False, "message": "reCAPTCHA invalid"}

    return {"valid": True}
