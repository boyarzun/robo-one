from django import forms


class Test(forms.Form):
    name = forms.CharField(max_length=100)
