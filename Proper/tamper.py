#!/usr/bin/env python3
import os
import string
import hashlib
from urllib.parse import quote_plus
from lib.core.enums import PRIORITY

def tamper(payload, **kwargs):
	salt = b"hie0shah6ooNoim"
	h = hashlib.md5(salt + payload.encode()).hexdigest()
	retVal = "{}&h={}".format(payload, h)
	return retVal
