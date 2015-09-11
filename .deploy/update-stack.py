import botocore.session

session = botocore.session.get_session()


cloudformation = session.create_client('cloudformation')

print("cloudformation waiters:")

cloudformation.waiter_names